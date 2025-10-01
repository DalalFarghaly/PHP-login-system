
<?php
$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="root";
$dbname="users";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

   if($con->connect_error)
        echo"error";
    else  echo "connected";

//$con->close();

?>