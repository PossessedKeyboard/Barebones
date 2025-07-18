<?php


$server   ='localhost '  ;
$username ='dummy     '  ;
$password ='dumdum!123'  ;
$database ='Barebones'   ;

header('Content-Type: application/json');

try{
    $conn = new mysqli ($server,$username,$password,$database);
    echo "Connection sucessful";
   }
catch(mysqli_sql_exception $e) 
{
    echo "An error has ocurred, the error code is: ".$e->getCode()."\n";
    echo "The SQL state is: ".                   $e->getSQLState()."\n";
};


?>