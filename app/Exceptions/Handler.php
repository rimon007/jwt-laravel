<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
//use App\Exceptions\JWTExceptionHandle;
use JWTException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if($exception instanceof JWTException) {
            return response($exception->getMessage());
        } else if ($exception instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
            return response('Token is Invalid', 401);
        } else if ($exception instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
            return response('Token is Expired', 401);
        }
        // if($exception instanceof JWTExceptionHandle) {
        //     session()->flash('name', 'message');
        //     return redirect('');
        // }
        return parent::render($request, $exception);
    }
}
