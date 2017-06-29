<?php 

    function loginWithUsernameAndPassword($username, $password)
    {

         $url="http://prabtech.com/rest/userservice.php?username=$username&password=$password&login=login";

        $client=curl_init($url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);

        $response=curl_exec($client);
        return $response;
    }




    function registerWithUsernameAndPassword($username, $password)
    {
        
         $url="http://prabtech.com/rest/userservice.php?username=$username&password=$password";
    
        $client=curl_init($url);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
       
        $response=curl_exec($client);
        return $response;
    }

?>
