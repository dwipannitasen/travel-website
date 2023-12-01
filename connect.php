<?php
$servername= "localhost";
$username= "root";
$password= "";
$db= "paradise_travel";
$conn= mysqli_connect($servername,$username,$password,$db);
if($conn)
{
    /* echo "connection successfull"; */
}
else
{
    /* echo "not connected"; */
    die("connection is lost because".mysqli_connect_error());
}
?>