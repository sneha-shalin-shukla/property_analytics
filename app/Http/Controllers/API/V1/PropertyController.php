<?php

namespace App\Http\Controllers\API\V1;

use App\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use Log;
/**
 * @group Property Management
 *
 * APIs for managing properties
 */
class PropertyController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::all();

        return $this->sendResponse($properties->toArray(), 'Properties retrieved successfully.');
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
            //'guid' => 'required|uuid|unique:Properties',
            'suburb' => 'required',
            'state' => 'required',
            'country' => 'required'
        ]);

        if($validator->fails()){
            Log::error("Validation Error while adding Property.");
            Log::error(print_r( $validator->errors(), true));
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $property = Property::create($input);
        Log::info("Property created successfully.");
        Log::info(print_r($property->toArray(), true));
        return $this->sendResponse($property->toArray(), 'Property created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  UUID  $guid
     * @return \Illuminate\Http\Response
     */
    public function show($guid)
    {
        $property = Property::where('guid', $guid)->first();

        if (is_null($property)) {
            Log::error("Property not found with requested GUID = ".$guid);
            return $this->sendError('Property not found.');
        }

        return $this->sendResponse($property->toArray(), 'Property retrieved successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  UUID  $guid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $guid)
    {
        $input = $request->all();
        $property = Property::where('guid', $guid)->first();
        if (is_null($property)) {
            Log::error("Property not found with requested GUID = ".$guid);
            return $this->sendError('Property not found.');
        }
        if(isset($input['suburb']) && !empty($input['suburb']))
            $property->suburb = $input['suburb'];
        if(isset($input['state']) && !empty($input['state']))
            $property->state = $input['state'];
        if(isset($input['country']) && !empty($input['country']))
            $property->country = $input['country'];
        $property->save();
        Log::info("Property updated successfully.");
        Log::info(print_r($property->toArray(), true));
        return $this->sendResponse($property->toArray(), 'Property updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  UUID  $guid
     * @return \Illuminate\Http\Response
     */
    public function destroy($guid)
    {
        $property = Property::where('guid', $guid)->first();
        if (is_null($property)) {
            Log::error("Property not found with requested GUID = ".$guid);
            return $this->sendError('Property not found.');
        }
        $property->delete();
        Log::info("Property deleted successfully.");
        Log::info(print_r($property->toArray(), true));
        return $this->sendResponse($property->toArray(), 'Property deleted successfully.');
    }
}
