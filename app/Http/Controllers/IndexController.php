<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class IndexController extends Controller
{
public function getIndex(){

   return view('Index');
}

public function GetApi(){

   $curl = curl_init();
   curl_setopt_array($curl, [
   CURLOPT_URL => "https://api.baubuddy.de/index.php/login",
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_ENCODING => "",
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 30,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => "POST",
   CURLOPT_POSTFIELDS => "{\"username\":\"365\", \"password\":\"1\"}",
   CURLOPT_HTTPHEADER => [
   "Authorization: Basic QVBJX0V4cGxvcmVyOjEyMzQ1NmlzQUxhbWVQYXNz",
   "Content-Type: application/json"
     ],
   ]);
   
   $response = curl_exec($curl);
   $err = curl_error($curl);
   curl_close($curl);
   if ($err) {
     echo "cURL Error #:" . $err;
   } else {  
    $dizi = json_decode($response,true);
    $token=$dizi['oauth']['access_token'];
   }
     
    $data = array();
    $data_string = json_encode($data);
    $curl = curl_init('https://api.baubuddy.de/dev/index.php/v1/tasks/select');
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
    $authorization = "Authorization: Bearer ".$token;
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',$authorization,
    'Content-Length: ' . strlen($data_string))
     );
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);  
    $result = curl_exec($curl); 
    curl_close($curl);
    return response($result);

}
}
