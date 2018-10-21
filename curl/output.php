<?php

$data=array(
	'name'			=>	'John',
	'surname'		=>	'Bronson',
	'age'			=>	'34',
	'languages'		=>	array('English', 'Polish', 'French'),
);
$data_json=json_encode($data);
echo $data_json;
//var_dump(json_encode($data));
