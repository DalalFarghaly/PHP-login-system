<?php
session_start();
include("connections.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD']=="POST")
{
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $Email=$_POST['email'];
    $Pass=$_POST['password'];

    if(!empty($Pass)&&!empty($firstName)&&!empty($lastName)&&!empty($Email))
    {
        $query="insert into users(firstName, lastName,email,pass) values('$firstName', '$lastName','$Email','$Pass')";
       if( mysqli_query($con,$query))
         header("location:login.php");
        
        
    }
    else {
        echo "please enter valid data ";
    }

}

?>






<!DOCTYPE html>
<html>
    <header>
        <title>sign in  bage</title></header>
    <body>
<h1>sign up page</h1>
<form  method ="post">
    <label > First name</label>
        <input type="text" name="firstName"> <br>
          <label > Last Name</label>
        <input type="text" name="lastName"><br>
          <label > Email</label>
        <input type="Email" name="email"><br>
          <label > Password</label>
        <input type="Password" name="password"><br>
        <input type="submit" value ="submit"><br>
        click to <a href ="login.php">log in</a>
</form>

    </body>
</html>
