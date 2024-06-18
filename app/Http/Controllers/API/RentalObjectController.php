<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\RentalObject;
use App\Models\RentalObjectImage;
use App\Models\RentalObjectAmenitiesData;
use App\Models\RentalObjectAddress;
use App\Models\RentalObjectAmenity;
use Validator;
use App\Http\Resources\RentoutInfoResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;
   
class RentalObjectController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        $rentalObjects = RentalObject::all();
    
        return $this->sendResponse($rentalObjects, 'RentalObject retrieved successfully.');
    }

    /**
     * Create rental object
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request): JsonResponse
    {
        $input = $request->all();
        $input['user_id'] = $request->user()->id;
        $rentalObject = RentalObject::create($input);
        
        return $this->sendResponse($rentalObject, 'Rental object create successfully.');
    }

    /**
     * Get amenities
     *
     * @return \Illuminate\Http\Response
     */
    public function getAmenities(Request $request): JsonResponse
    {
        $amenities = RentalObjectAmenity::all();
        
        return $this->sendResponse($amenities, 'Rental object amenities successfully.');
    }

    /**
     * Set status/type rental object
     *
     * @return \Illuminate\Http\Response
     */
    public function setStatusType(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'object_status' => 'required',
            'object_type' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        // todo: add check for exists rental object

        $user = $request->user();

        if(is_null($request->input('id'))) {
            $input = $request->all();
            $input['user_id'] = $user->id;
            $rentalObject = RentalObject::create($input);

            return $this->sendResponse($rentalObject, 'Rental object create successfully.');
        } else {
            $rentalObject = RentalObject::find($request->input('id'));

            $rentalObject->object_status = $request->input('object_status');
            $rentalObject->object_type = $request->input('object_type');

            $rentalObject->save();

            return $this->sendResponse($rentalObject, 'Rental object updated successfully.');
        }
    }

    /**
     * Set address to rental object
     *
     * @return \Illuminate\Http\Response
     */
    public function setAddress(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'rental_object_id' => 'required',
            'string_address' => 'required',
            'json_address' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        // todo: add check for exists rental object

        $user = $request->user();

        if(is_null($request->input('id'))) {
            $input = $request->all();

            $rentalObjectAddress = RentalObjectAddress::create($input);

            return $this->sendResponse($rentalObjectAddress, 'Rental object address create successfully.');
        } else {
            $rentalObjectAddress = RentalObjectAddress::find($request->input('id'));

            $rentalObjectAddress->rental_object_id = $request->input('rental_object_id');
            $rentalObjectAddress->object_status = $request->input('object_status');
            $rentalObjectAddress->object_type = $request->input('object_type');
            $rentalObjectAddress->entrance = $request->input('entrance') ?? '';
            $rentalObjectAddress->intercom = $request->input('intercom') ?? '';
            $rentalObjectAddress->floor = $request->input('floor') ?? 0;
            $rentalObjectAddress->apartment = $request->input('apartment') ?? 0;
            $rentalObjectAddress->object_type = $request->input('comment');

            $rentalObjectAddress->save();

            return $this->sendResponse($rentalObjectAddress, 'Rental object updated successfully.');
        }
    }

    /**
     * Set amenities to rental object
     *
     * @return \Illuminate\Http\Response
     */
    public function setAmenities(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'rental_object_id' => 'required|numeric',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        // todo: add check for exists rental object

        $user = $request->user();

        RentalObjectAmenitiesData::where('rental_object_id', $request->input('rental_object_id'))->delete();

        $request->collect('amenities')->each(function ($amenity) {
            RentalObjectAmenitiesData::create($amenity);
        });
        
        return $this->sendResponse('OK', 'Rental object AmenitiesData saved successfully.');
    }

    /**
     * Set params to rental object
     *
     * @return \Illuminate\Http\Response
     */
    public function setParams(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|numeric',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        // todo: add check for exists rental object

        $user = $request->user();

        $rentalObject = RentalObject::find($request->input('id'));

        $rentalObject->area = $request->input('area') ?? 0;
        $rentalObject->floor = $request->input('floor') ?? 0;
        $rentalObject->floors_number = $request->input('floors_number') ?? 0;
        $rentalObject->single_beds = $request->input('single_beds') ?? 0;
        $rentalObject->double_beds = $request->input('double_beds') ?? 0;
        $rentalObject->rooms = $request->input('rooms') ?? 0;
        $rentalObject->max_guests_per_request = $request->input('max_guests_per_request') ?? 0;
        $rentalObject->max_families_per_time = $request->input('max_families_per_time') ?? 0;
        $rentalObject->bathrooms = $request->input('bathrooms') ?? 0;

        $rentalObject->save();
        
        return $this->sendResponse($rentalObject, 'Rental object params saved successfully.');
    }

    /**
     * Set cost params to rental object
     *
     * @return \Illuminate\Http\Response
     */
    public function setCostParams(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|numeric',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        // todo: add check for exists rental object

        $user = $request->user();

        $rentalObject = RentalObject::find($request->input('id'));

        $rentalObject->min_cost_per_day = $request->input('min_cost_per_day') ?? 0;
        $rentalObject->bail = $request->input('bail') ?? false;
        $rentalObject->trip_docs = $request->input('trip_docs') ?? false;

        $rentalObject->save();
        
        return $this->sendResponse($rentalObject, 'Rental object cost params saved successfully.');
    }

    /**
     * Set restrictions to rental object
     *
     * @return \Illuminate\Http\Response
     */
    public function setRestrictions(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|numeric',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        // todo: add check for exists rental object

        $user = $request->user();

        $rentalObject = RentalObject::find($request->input('id'));

        $rentalObject->no_children = $request->input('no_children') ?? false;
        $rentalObject->no_pets = $request->input('no_pets') ?? false;
        $rentalObject->no_smoking = $request->input('no_smoking') ?? false;
        $rentalObject->no_alcohol = $request->input('no_alcohol') ?? false;
        $rentalObject->no_party = $request->input('no_party') ?? false;
        $rentalObject->check_in_time = $request->input('check_in_time');
        $rentalObject->check_out_time = $request->input('check_out_time');

        $rentalObject->save();
        
        return $this->sendResponse($rentalObject, 'Rental object restrictions saved successfully.');
    }

    /**
     * Add image to rental object
     *
     * @return \Illuminate\Http\Response
     */
    public function addImage(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'rental_object_id' => 'required|numeric',
            'image' => 'required',
            'is_main' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        // todo: add check for exists rental object

        if($request->hasFile('image')) {
            $uuid = Str::uuid();
            $request->image->storeAs('images', $uuid.'.'.$request->image->extension(), 'public');

            $user = $request->user();
            $imageFile = $request->file('image');

            $inputImage['rental_object_id'] = $request->input('rental_object_id');
            $inputImage['name'] = $uuid.'.'.$request->image->extension();
            $inputImage['extension'] = $request->image->extension();
            $inputImage['is_main'] = $request->input('is_main');

            $rentalObjectImage = RentalObjectImage::create($inputImage);

            return $this->sendResponse($rentalObjectImage, 'Rental object image create successfully.');
        } else {
            return $this->sendError('Validation Error.', 'Is not file');
        }
    }

    /**
     * Add image to rental object
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteImage(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|numeric',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        // todo: add check for exists rental object

        RentalObjectImage::where('id', $request->input('id'))->delete();

        return $this->sendResponse('Deleted', 'Rental object image deleted successfully.');
    }

    /**
     * Set image is main for rental object
     *
     * @return \Illuminate\Http\Response
     */
    public function setImageIsMain(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'image_id' => 'required|numeric',
            'rental_object_id' => 'required|numeric',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        // todo: add check for exists rental object

        $user = $request->user();

        RentalObjectImage::where('rental_object_id', $request->input('rental_object_id'))->update('is_main', false);

        $rentalObjectImage = RentalObjectImage::find($request->input('image_id'));

        $rentalObjectImage['is_main'] = true;

        $rentalObjectImage->save();
        
        return $this->sendResponse('OK', 'RentalObjectImage updated successfully.');
    }

    /**
     * Set title and descr to rental object
     *
     * @return \Illuminate\Http\Response
     */
    public function setTitleAndDescr(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|numeric',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        // todo: add check for exists rental object

        $user = $request->user();

        $rentalObject = RentalObject::find($request->input('id'));

        $rentalObject->title = $request->input('title') ?? '';
        $rentalObject->descr = $request->input('descr') ?? '';

        $rentalObject->save();
        
        return $this->sendResponse($rentalObject, 'Rental object RentalObject saved successfully.');
    }
}