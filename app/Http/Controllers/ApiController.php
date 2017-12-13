<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use JWTAuthException;
use Carbon\Carbon;
use App\Http\Resources\User as UserResource;

class ApiController extends Controller
{
    public function login(Request $request){
    	$credentials = $request->only('email', 'password');

    	try {
            config()->set('jwt.ttl', 1);
            
            if(!$token = JWTAuth::attempt($credentials)) {
    			return response()->json([
    				'success' => false,
    				'message' => 'Credentials Not Match!'
    			], 401);
    		}
    	} catch(JWTAuthException $e) {
			return response()->json([
				'success' => false,
				'message' => 'Failed to create token!'
			], 404);
    	}

        return (new UserResource(JWTAuth::user()))->additional(['token' => $token])->response();
    }

    public function getAuthUser(){
    	$user = JWTAuth::toUser(request('token'));
    	return response()->json($user);
    }
}
