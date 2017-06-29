//user.php
<h2>Login </h2>

<form action="user.php" method="POST">
    <input type="text" name="username" placeholder="username"><br>
    <input type="password" name="password" placeholder="password"><br>
    <input type="submit" name="loginSubmit" ><br>
</form>
<h2>Registration </h2>

<form action="user.php" method="POST">
    <input type="text" name="username" placeholder="username"><br>
    <input type="password" name="password" placeholder="password"><br>
    <input type="submit" name="registrationSubmit" ><br>
</form>

<a href="user.php?record=record">Get all record</a>





<?php
require('OAuth.php');

 if(isset($_REQUEST['loginSubmit']))
 {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $result = loginWithUsernameAndPassword($username, $password);
    echo $result;
    $result=json_decode($result);
    var_dump($result);
    if($result->data)
    { echo "Login Success"; }
    else{ echo "Login Failed"; }

 }
 



 if(isset($_REQUEST['registrationSubmit']))
 {
      $username = $_REQUEST['username'];
      $password = $_REQUEST['password'];

      $result = registerWithUsernameAndPassword($username, $password);
      echo $result;
 }








if(isset($_REQUEST['record']))
{
     echo "gettingAllRecord";
    $url="http://localhost/rest/server/userservice.php?record=record";
    $client=curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER,1);
    $result=curl_exec($client);
    print_r($result);
   // echo $result["name"];
    
    echo "AllRecord Fetched";
}





// if(isset($_REQUEST['registrationSubmit'])){
//     $username = $_REQUEST['username'];
//     $password = $_REQUEST['password'];
//     $url="http://localhost/rest/server/userservice.php?username=$username&password=$password";
    
//     $client=curl_init($url);
//     curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
//     $response=curl_exec($client);
//     echo $response;
//     $result=json_decode($response);
//    // echo $response->status."->".$response->message;
//     echo var_dump($result);
//     echo "Registration";
// }

// if(isset($_REQUEST['loginSubmit'])){
//     $username = $_REQUEST['username'];
//     $password = $_REQUEST['password'];
//     $url="http://localhost/rest/server/userservice.php?username=$username&password=$password&login=login";

//     $client=curl_init($url);
//     curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);

//     $result=curl_exec($client);
//     echo $result;
//     $result=json_decode($result);
//     echo var_dump($result);

    
//     echo "Login";
// }



?>