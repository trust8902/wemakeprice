<?php
require_once 'libs/class.Common.php';

$response = Common::requestApi('http://api.wemakeprice.io/apitest/getContent', array(
	'url'        => $_POST['url'],
	'filterType' => $_POST['filterType'],
	'spliceNums' => $_POST['spliceNums']
));

if($response['code'] != '200') {
	die(json_encode(array('code' => $response['code'], 'error' => $response['error'])));
}

die($response['data']);