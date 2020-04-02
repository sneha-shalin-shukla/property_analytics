<?php

namespace App\Http\Controllers\API\V1;

use App\AnalyticType;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use Log;

/**
 * @group AnalyticType Management
 *
 * APIs for managing analytic types
 */
class AnalyticTypeController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $analytic_types = AnalyticType::all();

        return $this->sendResponse($analytic_types->toArray(), 'AnalyticTypes retrieved successfully.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $analytic_types = AnalyticType::all();

        return $this->sendResponse($analytic_types->toArray(), 'AnalyticTypes retrieved successfully.');
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
            'name' => 'required',
            'units' => 'required',
            'is_numeric' => 'required',
            'num_decimal_places' => 'numeric'
        ]);

        if($validator->fails()){
            Log::error("Validation Error while adding AnalyticType.");
            Log::error(print_r( $validator->errors(), true));
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $analytic_type = AnalyticType::create($input);
        Log::info("AnalyticType created successfully.");
        Log::info(print_r($analytic_type->toArray(), true));
        return $this->sendResponse($analytic_type->toArray(), 'AnalyticType created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $analytic_type = AnalyticType::find($id);

        if (is_null($analytic_type)) {
            Log::error("AnalyticType not found with requested ID = ".$id);
            return $this->sendError('AnalyticType not found.');
        }

        return $this->sendResponse($analytic_type->toArray(), 'AnalyticType retrieved successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AnalyticType  $analyticType
     * @return \Illuminate\Http\Response
     */
    public function edit(AnalyticType $analyticType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $analytic_type = AnalyticType::find($id);

        if (is_null($analytic_type)) {
            Log::error("AnalyticType not found with requested ID = ".$id);
            return $this->sendError('AnalyticType not found.');
        }

        if(isset($input['name']) && !empty($input['name']))
            $analytic_type->name = $input['name'];
        if(isset($input['units']) && !empty($input['units']))
            $analytic_type->units = $input['units'];
        if(isset($input['is_numeric']) && !empty($input['is_numeric']))
            $analytic_type->is_numeric = $input['is_numeric'];
        if(isset($input['num_decimal_places']) && !empty($input['num_decimal_places']))
            $analytic_type->num_decimal_places = $input['num_decimal_places'];
        $analytic_type->save();

        Log::info("AnalyticType updated successfully.");
        Log::info(print_r($analytic_type->toArray(), true));

        return $this->sendResponse($analytic_type->toArray(), 'AnalyticType updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $analytic_type = AnalyticType::find($id);
        
        if (is_null($analytic_type)) {
            Log::error("AnalyticType not found with requested ID = ".$id);
            return $this->sendError('AnalyticType not found.');
        }

        $analytic_type->delete();

        Log::info("AnalyticType deleted successfully.");
        Log::info(print_r($analytic_type->toArray(), true));

        return $this->sendResponse($analytic_type->toArray(), 'AnalyticType deleted successfully.');
    }
}
