<?php
header('refresh:5;url=webh_.php');
$conn = mysqli_connect('db4free.net', 'pheebee', '32857831', 'monnify');

if ($conn) {
    
echo'hi';
echo'<br>';
echo'<br>';
echo'<br>';
echo'<br>';

// Retrieve the request's body and parse it as JSON
    
    $input = @file_get_contents("php://input");
    
    $event = json_decode($input);
    
    // Do something with $event
    

    http_response_code(200); // PHP 5.4 or greater
   
    print_r($event);
    // $str="INSERT INTO userinfo SET user_email='$user_email', mobile='$phone',username='$username',dob='', gender='$gender',pass='$password';";
    // $result = mysqli_query($conn, $str);
    
}else{
    die("Could not connect ".mysqli_error($conn));
}

// alternative method
// if( $_GET["name"] || $_GET["age"] ) {
//     echo "Welcome ". $_GET['name']. "<br />";
//     echo "You are ". $_GET['age']. " years old.";
    
//     exit();
//  }