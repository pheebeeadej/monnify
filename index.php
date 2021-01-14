<?php
if (isset($_POST['submit'])) {
    //live key to be replaced with the key below
  //MK_PROD_GXWML8TZ66:8M2W57NBD86BZCX76BWRVNYJ8NYUWD56
  // test key
  // MK_TEST_BTTF7KAGTJ:H8L3S4JDUKW9J67ZHCN9NJX2LR5XKQLP
 $login = base64_encode("MK_PROD_GXWML8TZ66:8M2W57NBD86BZCX76BWRVNYJ8NYUWD56"); 
 // echo '<br>';
 // echo base64_decode("eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJhdWQiOlsibW9ubmlmeS1wYXltZW50LWVuZ2luZSJdLCJzY29wZSI6WyJwcm9maWxlIl0sImV4cCI6MTYxMDU2NzY1MywiYXV0aG9yaXRpZXMiOlsiTVBFX01BTkFHRV9MSU1JVF9QUk9GSUxFIiwiTVBFX1VQREFURV9SRVNFUlZFRF9BQ0NPVU5UIiwiTVBFX0lOSVRJQUxJWkVfUEFZTUVOVCIsIk1QRV9SRVNFUlZFX0FDQ09VTlQiLCJNUEVfQ0FOX1JFVFJJRVZFX1RSQU5TQUNUSU9OIiwiTVBFX1JFVFJJRVZFX1JFU0VSVkVEX0FDQ09VTlQiLCJNUEVfREVMRVRFX1JFU0VSVkVEX0FDQ09VTlQiLCJNUEVfUkVUUklFVkVfUkVTRVJWRURfQUNDT1VOVF9UUkFOU0FDVElPTlMiXSwianRpIjoiZjRmN2FkOTItMzljYi00MzAxLWExNmMtZjM2ZjQ1MGUxNWNmIiwiY2xpZW50X2lkIjoiTUtfUFJPRF9HWFdNTDhUWjY2In0.iMJ9HxxqQxSE9J8bkLxRi4oiaJydV7H19CvNkzT3LSwrep1qs00_eH9BoGfhW7IH35jdKNvDJr4B-rAtP02EFpaqF6alpGPj6bqnTBm1I2AW-oN1kR3C8vti7stt1GZRMp1imMdZXfE1jyNvtnEONKlOj37D4uD0cXuW6d6ZSttydXmg6OjzxSMDpn6flKtx0uHX2ieuuKkpgplGWDkRZ3hq69M9Rhob15JHIcbjhDMaj2D-q1FhfeFt6eHeenM40p7HI53IrD51700Q8vA648xf2K3rcAkuDCssWNlshc616lC9QRm5u70ii49Ut4NsE5o8ngqRnNz_cZVsXpO3TA");
 
 $curl = curl_init();
 
 curl_setopt_array($curl, array(
   CURLOPT_URL => "https://sandbox.monnify.com/api/v1/auth/login",
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_ENCODING => "",
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 0,
   CURLOPT_FOLLOWLOCATION => true,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => "POST",
   CURLOPT_POSTFIELDS =>'{}',
   CURLOPT_HTTPHEADER => array(
     "Authorization: Basic ".$login,
     "Content-Type: application/json"
   ),
 ));
 
 $response = curl_exec($curl);
 
 curl_close($curl);
 // echo $response;
 
 $value= json_decode($response, true);
 // print_r($value);
 $token = $value["responseBody"]["accessToken"];
 // print( $token);
 //echo $token;
 $ref = $_POST['ref'];
 $email = $_POST['email'];
 header('location:get_reserve_num.php?tok='.$token.'&ref='.$ref.'&email='.$email);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
input{
    width: 300px;
    height:30px;
}
button{
    padding: 2px 1% 2px 1%;
    font-size: 20px;
}
</style>
<body>
  <center style="margin-top: 100px;">
  <form action="index.php" method="POST">
  <input type="email" name="email" id="" placeholder="email" ><br>
  <input type="text" name="ref" id="" placeholder="name"><br><br>
  <button type="submit"  name="submit">submit</button>
  </form>
  </center>  
</body>
</html>