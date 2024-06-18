<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\RentoutInfo;
use Validator;
use App\Http\Resources\RentoutInfoResource;
use Illuminate\Http\JsonResponse;
   
class RentoutInfoController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        $rentoutInfos = RentoutInfo::all();
    
        return $this->sendResponse(RentoutInfoResource::collection($rentoutInfos), 'RentoutInfo retrieved successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): JsonResponse
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $rentoutInfo = RentoutInfo::create($input);
   
        return $this->sendResponse(new RentoutInfoResource($rentoutInfo), 'RentoutInfo created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): JsonResponse
    {
        $rentoutInfo = RentoutInfo::find($id);
  
        if (is_null($rentoutInfo)) {
            return $this->sendError('RentoutInfo not found.');
        }
   
        return $this->sendResponse(new RentoutInfoResource($rentoutInfo), 'RentoutInfo retrieved successfully.');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RentoutInfo $rentoutInfo): JsonResponse
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $rentoutInfo->name = $input['name'];
        $rentoutInfo->detail = $input['detail'];
        $rentoutInfo->save();
   
        return $this->sendResponse(new RentoutInfoResource($rentoutInfo), 'RentoutInfo updated successfully.');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RentoutInfo $rentoutInfo): JsonResponse
    {
        $rentoutInfo->delete();
   
        return $this->sendResponse([], 'RentoutInfo deleted successfully.');
    }
}