
<?php 
session_start();
include("connections.php");
include("functions.php");

$user_data = check_login($con);

?>







<!DOCTYPE html>
<html>
    <head>
    <title>MY website</title>
    </head>
    <body>
        <h1>Welcome</h1>
        <a href ="logout.php"> log out </a>
            <br>
            <h2> hello username</h2>
    </body>
</html>