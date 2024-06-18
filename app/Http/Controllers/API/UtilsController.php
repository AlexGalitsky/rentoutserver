<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use Illuminate\Http\JsonResponse;
   
class UtilsController extends BaseController
{
    /**
     * Return IP address
     *
     * @return \Illuminate\Http\Response
     */
    public function getIpAddress(Request $request): JsonResponse
    {
        $ipAddress = $request->ip();
    
        return $this->sendResponse([
            'ip' => $ipAddress,
        ], 'Ip address retrieved successfully.');
    }

    /**
     * Check user is auth
     *
     * @return \Illuminate\Http\Response
     */
    public function isAuth(Request $request): JsonResponse
    {    
        return $this->sendResponse([
            'status' => true,
        ], 'Bearer token is valid.');
    }
}