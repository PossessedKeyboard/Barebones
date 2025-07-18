<?php

include 'C:/Users/User/Desktop/BAREBONES/MODEL/CRUD.PHP';

//header('Content-Type: application/json');


$request = $_SERVER['REQUEST_METHOD'];

$INPUT = json_encode(file_get_contents('php://input'));

switch($request){

case "GET"   :    get($conn);
break;
case "POST"  :   post($conn); 
break;
case "PUT"   : update($conn);
break;
case "DELETE": delete($conn);
break;

default: echo "Invalid Input";

                 };

$conn-> close();

?>