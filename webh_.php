<?php
$conn = mysqli_connect('localhost', 'root', '', 'cit');

if ($conn) {
    

    // Retrieve the request's body and parse it as JSON
    
    $input = @file_get_contents("php://input");
    
    $event = json_decode($input);
    
    // Do something with $event
    
    http_response_code(200); // PHP 5.4 or greater
    
  
    
}else{
    die("Could not connect ".mysqli_error($conn));
}

// alternative method
// if( $_GET["name"] || $_GET["age"] ) {
//     echo "Welcome ". $_GET['name']. "<br />";
//     echo "You are ". $_GET['age']. " years old.";
    
//     exit();
//  }