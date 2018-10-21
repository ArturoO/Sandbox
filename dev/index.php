<?php

require_once(__DIR__ . '/src/base.php');

$John = new Patient('John', '3dasf3sdaf4fsf');
$Adam = new User('Adam');


echo 'Patient name is: ' . getUserName($John) . '<br>';
echo 'User name is: ' . getUserName($Adam) . '<br>';

die;





$users = array(
    array(
        'name' => 'Tom',
        'age' => 23,
    ),
    array(
        'name' => 'Jenny',
        'age' => 26,
    ),
);

displayUsers($users);

function displayUsers(array $users)
{
    if(!count($users))
        return false;
    
    foreach($users as $user)
    {
        echo 'Name: ' . $user['name'] . ' is ' . $user['age'] . ' years old.<br>';
    }
}







