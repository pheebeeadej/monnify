<?php

//live contract code replace the contract code with
//133541598312
// test contract code
// 4524521353
if (isset($_GET['tok'])) {

  $ref =$_GET['ref'];
  $token = $_GET['tok'];
  $email = $_GET['email'];

  
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://sandbox.monnify.com/api/v1/bank-transfer/reserved-accounts",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => 
                      '{
                          "accountReference": "'.$email.'",
                          "accountName": "'.$ref.'",
                          "currencyCode": "NGN",
                          "contractCode": 133541598312,
                          "customerEmail": "'.$email.'",
                          "customerName": "'.$ref.'"
                      }',
                      
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer ".$token,
    "Content-Type: application/json"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
 echo $response;
 echo"<br>";
 echo"<br>";
 echo"<br>";
 echo"<br>";
 echo"<br>";

$value= json_decode($response, true);
$reserved_acc = $value["responseBody"]["accountNumber"];
$bankname = $value["responseBody"]["bankName"];

echo "account num: ". $reserved_acc;
echo"<br>";
echo "bank name: ". $bankname;
echo"<br>";
echo "account name: ". "Cheap Internet Plan";



}

