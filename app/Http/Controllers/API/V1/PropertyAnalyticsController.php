<?php

namespace App\Http\Controllers\API\V1;

use App\PropertyAnalytics;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use DB;
use Log;

class PropertyAnalyticsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property_analytics = PropertyAnalytics::all();

        return $this->sendResponse($property_analytics->toArray(), 'Analytic Types retrieved successfully.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'property_id' => 'required|exists:properties,id',
            'analytic_type_id' => 'required|exists:analytic_types,id',
            'value'=> 'nullable'
        ]);

        if($validator->fails()){
            Log::error("Validation Error while adding PropertyAnalytics.");
            Log::error(print_r( $validator->errors(), true));
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $property_analytics = PropertyAnalytics::where('property_id', $input['property_id'])->first();
        if (is_null($property_analytics)) {
            $property_analytics = PropertyAnalytics::create($input);
            Log::info("PropertyAnalytics created successfully.");
            Log::info(print_r($property_analytics->toArray(), true));
            return $this->sendResponse($property_analytics->toArray(), 'PropertyAnalytics created successfully.');
        }else{
            $update_response = $this->update($request,$input['property_id']);
            Log::info("PropertyAnalytics updated successfully when Added was requested. Property ID = ".$input['property_id']);
            return $update_response;
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $property_id
     * @return \Illuminate\Http\Response
     */
    public function show($property_id)
    {
        $property_analytics = PropertyAnalytics::where('property_id',$property_id)->get();

        if (is_null($property_analytics)) {
            Log::error("PropertyAnalytics not found with requested ID = ".$property_id);
            return $this->sendError('PropertyAnalytics not found.');
        }

        return $this->sendResponse($property_analytics->toArray(), 'PropertyAnalytics retrieved successfully.');
    }

    /**
     * Display Summary Analytics for All property Analytics in specified Suburb, State or Country, .
     * @param  string  $filter
     * @param  string  $value
     * @return \Illuminate\Http\Response
     */
    public function showSummary($filter, $value)
    {
        Log::info("Request for displaying summary for filter = ".$filter. " and value = ".$value);
        $column_name = '';
        $column_value = $value;
        if($filter == 'suburb'){
            $column_name = 'properties.suburb';
        }else if($filter == 'state'){
            $column_name = 'properties.state';
        }else if($filter == 'country'){
            $column_name = 'properties.country';
        }else{
            Log::error("PropertyAnalytics can not be found with filter used = ".$filter. ", Only 'suburb', 'state' and 'country' is allowed as a first parameter for filter.");
            return $this->sendResponse(array(), "PropertyAnalytics can not be found with filter used = ".$filter. ", Only 'suburb', 'state' and 'country' is allowed as a first parameter for filter.");
        }
        // First get Total Counts for all distinct Analytic Types for matching location.
        $summary_a = array();
        $total_counts_recs = DB::table("property_analytics")
            ->select(
                "property_analytics.analytic_type_id"
                ,DB::raw('COUNT(property_analytics.analytic_type_id) as total_count')
            )
            ->join('properties', 'property_analytics.property_id', '=', 'properties.id')
            ->where($column_name, '=', $column_value)
            ->groupBy("property_analytics.analytic_type_id")
            ->get();
        foreach($total_counts_recs as $total_count_rec){
            // Get Median Value for PropertyAnalytics in distinct Analytic Types for matching location.
            $median_value_sql = "
                SELECT AVG(dd.value) as median_val
                    FROM (
                    SELECT d.value, @rownum:=@rownum+1 as `row_number`, @total_rows:=@rownum
                      FROM property_analytics d, (SELECT @rownum:=0) r
                      WHERE d.value is NOT NULL
                      AND d.analytic_type_id = :analytic_type_id
                      ORDER BY CAST(d.value as double)
                    ) as dd
                    WHERE dd.row_number IN ( FLOOR((@total_rows+1)/2), FLOOR((@total_rows+2)/2) )
                ";
            $median_value_select = DB::select( DB::raw($median_value_sql), array(
               'analytic_type_id' => $total_count_rec->analytic_type_id,
             ));
            $median_value = 0;
            if(count($median_value_select) > 0){
                $median_value = $median_value_select[0]->median_val;
            }
            
            $summary_a[$total_count_rec->analytic_type_id] = array(
                'total_count' => $total_count_rec->total_count,
                'median_value' => $median_value
            );
        }
        $summary = array();
        // Get Min, Max, Average Value for PropertyAnalytics in distinct Analytic Types for matching location.
        // Also get Total Counts for PropertyAnalytics Without value in distinct Analytic Types.
        $aggr_values = DB::table("property_analytics")
            ->select(
                "property_analytics.analytic_type_id"
                ,DB::raw('MAX(CAST(property_analytics.value as double)) as max_value')
                ,DB::raw('MIN(CAST(property_analytics.value as double)) as min_value')
                ,DB::raw('AVG(CAST(property_analytics.value as double)) as avg_value')
                ,DB::raw('COUNT(CAST(property_analytics.value as double)) as value_count')
            )
            ->join('properties', 'property_analytics.property_id', '=', 'properties.id')
            ->where($column_name, '=', $column_value)
            ->groupBy("property_analytics.analytic_type_id")
            ->get();
        
        foreach($aggr_values as $value){
            $total_count = $summary_a[$value->analytic_type_id]['total_count'];
            unset($summary_a[$value->analytic_type_id]['total_count']);
            $count_with_value = $value->value_count;
            $count_without_value = $total_count - $value->value_count;
            $percentage_with_value = round(($count_with_value / $total_count) * 100, 2);
            $percentage_without_value = round(($count_without_value / $total_count) * 100, 2);
            // Save All values in an array
            $summary[$value->analytic_type_id] = array(
                'min_value' => $value->min_value,
                'max_value' => $value->max_value,
                'median_value' => $summary_a[$value->analytic_type_id]['median_value'],
                'avg_value' => $value->avg_value,
                'percentage_with_value' => $percentage_with_value,
                'percentage_without_value' => $percentage_without_value,
            );
        }
        
        return $this->sendResponse($summary, 'PropertyAnalytics retrieved successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PropertyAnalytics  $propertyAnalytics
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyAnalytics $propertyAnalytics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $property_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $property_id)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'analytic_type_id' => 'required|exists:analytic_types,id',
            'value'=> 'nullable'
        ]);

        if($validator->fails()){
            Log::error("Validation Error while updating PropertyAnalytics.");
            Log::error(print_r( $validator->errors(), true));
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $property_analytics = PropertyAnalytics::where('property_id', $property_id)
                                                ->where('analytic_type_id',$input['analytic_type_id'])
                                                ->first();
        
        if (is_null($property_analytics)) {
            $property_analytics = PropertyAnalytics::where('property_id', $property_id)->first();
            if (is_null($property_analytics)) {
                Log::error("PropertyAnalytics not found with requested ID = ".$property_id);
                return $this->sendError('PropertyAnalytics not found.');
            }else{
                $input['property_id'] = $property_id;
                $property_analytics = PropertyAnalytics::create($input);
                Log::info("PropertyAnalytics Added successfully.");
                Log::info(print_r($property_analytics->toArray(), true));
                return $this->sendResponse($property_analytics->toArray(), 'PropertyAnalytics updated successfully.');
            }
        }else{
        
            if(array_key_exists('value', $input)){
                $property_analytics->value = $input['value'];
                $property_analytics->save();
                Log::info("PropertyAnalytics updated successfully.");
                Log::info(print_r($property_analytics->toArray(), true));
                return $this->sendResponse($property_analytics->toArray(), 'PropertyAnalytics updated successfully.');
            }else{
                Log::info("Nothing to update PropertyAnalytics.");
                Log::info(print_r($property_analytics->toArray(), true));
                return $this->sendResponse($property_analytics->toArray(), 'Nothing to update PropertyAnalytics.');
            }
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $property_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($property_id)
    {
        $property_analytics = PropertyAnalytics::find($property_id);
        if($property_analytics){
            $property_analytics->delete();
            Log::info("PropertyAnalytics deleted successfully.");
            Log::info(print_r($property_analytics->toArray(), true));
            return $this->sendResponse($property_analytics->toArray(), 'PropertyAnalytics deleted successfully.');
        }else{
            Log::error("PropertyAnalytics not found with requested ID = ".$property_id);
            return $this->sendResponse(array('id'=>$property_id), 'PropertyAnalytics can not be found.');
        }
    }
}
