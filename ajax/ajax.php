<?php
require_once(dirname(__FILE__) . "/config.php");


//process ajax call
$result = array("isError" ,"output", "system_output");
ob_start();
$result["isError"] = 0;
$result["output"] = "record added, ID is 8";
$result["system_output"] = ob_get_clean();
echo json_encode($result);





