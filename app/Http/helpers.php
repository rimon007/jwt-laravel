<?php 

function responseError($msg, $code = 401) {
	return response([
		'success' => false,
		'msg' => $msg
	], $code);
}

function responseSuccess($msg = null, $data = null, $code = 200) {
	$response = ['success' => true];
	if(!is_null($msg))
		$response['msg'] = $msg;
	if(!is_null($data))
		$response['data'] = $data;
	return response($response, $code);
}
