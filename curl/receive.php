<?php
echo 1;

die;
//$vars = get_defined_vars();

$data = json_decode(file_get_contents('php://input'), true);
ob_start();
var_dump($data);
$result = ob_get_clean();
file_put_contents('data.txt',$result);
	
	
	