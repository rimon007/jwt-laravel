<?php 

function responseError($msg, $status = false, $code = 401) {
	return response([
		'success' => $status,
		'status' => ($status) ? 'success' : 'error',
		'msg' => $msg
	], $code);
}