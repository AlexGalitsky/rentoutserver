<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\JsonResponse;
   
class RegisterController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('Rentout')->plainTextToken;
        $success['name'] =  $user->name;
   
        return $this->sendResponse($success, 'User register successfully.');
    }

    /**
     * Login by email intent
     *
     * @return \Illuminate\Http\Response
     */
    public function loginByEmailIntent(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $existsUser = User::where('email', $request->email)->first();

        if(is_null($existsUser)) {
            // create
            $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $length = 16;

            $input = $request->all();
            $input['password'] = bcrypt(substr(str_shuffle(str_repeat($pool, 5)), 0, $length));
            $input['name'] = '';
            $input['phone'] = '';
            $user = User::create($input);

            return $this->sendResponse([
                'is_new' => true,
            ], 'User register successfully and OTP needed.');
        }
        else {
            // login
   
            return $this->sendResponse([
                'is_new' => false,
            ], 'OTP needed.');
        }
    }
   
    /**
     * Login by phone intent
     *
     * @return \Illuminate\Http\Response
     */
    public function loginByPhoneIntent(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|numeric|digits:11',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $existsUser = User::where('phone', $request->phone)->first();

        if(is_null($existsUser)) {
            // create
            $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $length = 16;

            $input = $request->all();
            $input['password'] = bcrypt(substr(str_shuffle(str_repeat($pool, 5)), 0, $length));
            $input['name'] = '';
            $input['email'] = '';
            $user = User::create($input);

            return $this->sendResponse([
                'is_new' => true,
            ], 'User register successfully and OTP nedded.');
        }
        else {
            // login
   
            return $this->sendResponse([
                'is_new' => false,
            ], 'OTP nedded.');
        }
    }

    /**
     * Login api by email
     *
     * @return \Illuminate\Http\Response
     */
    public function loginByEmail(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'code' => 'required|numeric|digits:6',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        if($request->code != '000000') {
            return $this->sendError(null, ['error'=>'Wrong code.']);
        }

        $existsUser = User::where('email', $request->email)->first();

        if(is_null($existsUser)) {
            // create
            $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $length = 16;

            $input = $request->all();
            $input['password'] = bcrypt(substr(str_shuffle(str_repeat($pool, 5)), 0, $length));
            $input['name'] = '';
            $input['phone'] = '';
            $user = User::create($input);
            $success['token'] =  $user->createToken('Rentout')->plainTextToken;
            $success['name'] =  $user->name;

            return $this->sendResponse($success, 'User register successfully.');
        }
        else {
            // login
            $success['token'] =  $existsUser->createToken('Rentout')->plainTextToken; 
            $success['name'] =  $existsUser->name;
   
            return $this->sendResponse($success, 'User login successfully.');
        }
    }

    /**
     * Login api by phone
     *
     * @return \Illuminate\Http\Response
     */
    public function loginByPhone(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|numeric|digits:11',
            'code' => 'required|numeric|digits:4',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        if($request->code != '0000') {
            return $this->sendError(null, ['error'=>'Wrong code.']);
        }

        $existsUser = User::where('phone', $request->phone)->first();

        if(is_null($existsUser)) {
            // create
            $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $length = 16;

            $input = $request->all();
            $input['password'] = bcrypt(substr(str_shuffle(str_repeat($pool, 5)), 0, $length));
            $input['name'] = '';
            $input['email'] = '';
            $user = User::create($input);
            $success['token'] =  $user->createToken('Rentout')->plainTextToken;
            $success['name'] =  $user->name;

            return $this->sendResponse($success, 'User register successfully.');
        }
        else {
            // login
            $success['token'] =  $existsUser->createToken('Rentout')->plainTextToken; 
            $success['name'] =  $existsUser->name;
   
            return $this->sendResponse($success, 'User login successfully.');
        }
    }

    /**
     * Logout api
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request): JsonResponse
    {
        $user = $request->user();

        if(is_null($user)) {
            return $this->sendError(null, 'User dont finded.');
        }
        else {
            // Revoke all tokens...
            // $user->tokens()->delete();
            
            // Revoke the token that was used to authenticate the current request...
            $request->user()->currentAccessToken()->delete();
            
            // Revoke a specific token...
            // $user->tokens()->where('id', $tokenId)->delete();

            return $this->sendResponse(null, 'User logout successfully.');
        }
    }
}