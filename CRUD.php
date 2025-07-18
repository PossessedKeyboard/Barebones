<?php

include 'C:/Users/User/Desktop/BAREBONES/MODEL/DB.PHP'; 



$request = $_SERVER['REQUEST_METHOD'];


$input = json_decode(file_get_contents('php://input'), true);


function get ($conn){


if  (isset($_GET['id'])) {
        
    $id = intval($_GET['id']);

    {$result=$conn->query("SELECT * FROM users WHERE ID=$id");

        while ($row=$result->fetch_assoc()) 
        {echo json_encode($row);}
    } 
                          }

else {$result=$conn->query("SELECT*FROM users");
      $users=[];
        while ($row=$result->fetch_assoc())
        {$users[]=$row;
        echo json_encode($row);}  
      };
                     };

function post($conn){

global $input;
    
$NAME    =  $input['NAME'   ]??  null; 
$AGE     =  $input['AGE'    ]??  null;
$GENDER  =  $input['GENDER' ]??  null;
$CELL    =  $input['CELL'   ]??  null;
$EMAIL   =  $input['EMAIL'  ]??  null;
$ADDRESS =  $input['ADDRESS']??  null;


$result = $conn->query("INSERT INTO users (NAME, AGE, GENDER, CELLPHONE, EMAIL, ADDRESS) VALUES ('$NAME', '$AGE', '$GENDER', '$CELL', '$EMAIL', '$ADDRESS')");

echo json_encode("User added!");
                    
                     };

function update($conn){

 global $input;   

$id     = $_GET['id'];

$NAME   = $input['NAME'   ]??  null;
$AGE    = $input['AGE'    ]??  null;
$GENDER = $input['GENDER' ]??  null;
$CELL   = $input['CELL'   ]??  null;
$EMAIL  = $input['EMAIL'  ]??  null;
$ADRESS = $input['ADDRESS']??  null;

if (isset($id)){$result= $conn-> query("UPDATE users SET NAME = '$NAME', AGE = '$AGE', GENDER = '$GENDER', CELLPHONE = '$CELL', EMAIL = '$EMAIL', ADDRESS = '$ADDRESS' WHERE id=$id");

echo json_encode("User Updated");
                } 
else {echo json_encode("Invalid Input");} 

                       };

function delete($conn){

$id = $_GET['id'];

if(isset($id)){$result= $conn-> query("DELETE FROM users WHERE id = $id");
    
echo json_encode ("User deleted");

               }
else{echo json_encode ("Invalid Input");};

};