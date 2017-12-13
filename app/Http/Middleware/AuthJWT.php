<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use JWTAuth, JWTException;
  
class AuthJWT
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*$token = $request->get('token');

        if($request->header('Authorization'))
            $token = explode(' ', $request->header('Authorization'))[1];*/

        try {
            $user = JWTAuth::parseToken()->toUser();
        } catch(JWTException $e) {
            return responseError($e->getMessage());
        } catch(Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                return responseError('Token is Invalid');
            }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                return responseError('Token is Expired');
            }else{
                return responseError($e->getMessage());
            }
        }
        return $next($request);
    }
}
