<?php
session_start();
include("connections.php");
include("functions.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $Email=$_POST['email'];
    $pass=$_POST['password'];

    //read from database 

    if(!empty($Email)&&!empty($pass))
    { $query="select* from users where email='$Email' limit 1";
      $result=mysqli_query($con,$query);
       if($result&&mysqli_num_rows($result)>0)
        {
        $user_data=mysqli_fetch_assoc($result);
        }
       if ($user_data['pass']===$pass)
        { 
        $_SESSION['email']=$user_data['email'];
        header("location:index.php");
        die;
        }
       else  echo"password might be wrong";
    }
   else echo "please enter valid info";


}


?>





<!DOCTYPE html>
<html>
    <head> <title>login</title></head>
    <body>
        <h1>log in page</h1>
     <form method ="post">
        <label>Email</label>
        <input type= "email" name="email"><br>
        <label> Password</label>
        <input type="password"name="password"><br>
        <input type = "submit" value="submit"><br>
 
        not regist ? <a href = "signup.php">sign up</a> now 
     </form>


    </body>
</html>