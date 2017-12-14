<?php

use App\Acme\Registration\MemberAccountRegistration;
use App\Acme\Registration\UserAccountRegistration;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	//return bcrypt(request('password'));
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
});

Route::get('member/register', function() {	
	$className = "App\Acme\Registration\\".ucfirst(request('slug'))."AccountRegistration";	
	if(!class_exists($className))
		return 'class not found!';

	$store = new $className(request()->all());	
	return $store->completeRegistration();
});
