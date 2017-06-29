# OAuth
Open Authentication Web Service


You can use OAuth for authentication and authorization. OAuth supports common scenarios such as those for web server, installed, and client-side applications. This is a simple PHP plugin you can integrate easily in your Web App for logging and registering users on cloud.

How to integrate this tool in you web app Create HTML Login / Register form and then follow these steps.
Steps to Plug this tool in your app :-

Download OAuth.php file.
Include it in your php file where where you authenticate/register user.
Use 'loginWithUsernameAndPassword($username, $password)' and 'registerWithUsernameAndPassword($username, $password)' function to to authenticate or register user on cloud.
You will get the response as the json object.
Decode the json object and Do the needful action according to the response.

Note: Registeration is done with username and password only.

I have also uploaded a sample app to understand the integration process in a better way.
