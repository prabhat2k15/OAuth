<?php
require('OAuth.php');//this file must be included 



 if(isset($_REQUEST['loginSubmit']))
 {
    $username = $_REQUEST['username']; //getting value from html client
    $password = $_REQUEST['password'];

    $result = loginWithUsernameAndPassword($username, $password);//invoke this method to login
    echo $result;
    $result=json_decode($result);
    var_dump($result);
    if($result->data)
    { 
        echo "Login Success"; 
    }
    else
    { 
        echo "Login Failed"; 
    }

 }
 



 if(isset($_REQUEST['registrationSubmit']))
 {
      $username = $_REQUEST['username'];
      $password = $_REQUEST['password'];

      $result = registerWithUsernameAndPassword($username, $password); //invoke this method to register
      echo $result;
       $result=json_decode($result);
    var_dump($result);
    if($result->data)
    { 
        echo "Registration Successful"; 
    }
    else
    { 
        echo "Registration Failed"; 
    }

 }










?>