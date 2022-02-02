<?php
include("connect.php");
session_start();
$email= $_REQUEST['email'];
$pass= $_REQUEST['password'];
$sql= "SELECT * FROM registration WHERE email='$email' AND password='$pass'";
$data= mysqli_query($conn, $sql);
if(mysqli_num_rows($data)>0)
{
    $_SESSION['email']=$email;
    echo "<script> alert('Log-In Successfull')</script>";
    echo "<script> window.location.href='duplicateindex.html'</script>";
}
else
{
    echo "<script> alert('Log-In Failed! Incorrect Password')</script>";
    echo "<script> window.location.href='index.html'</script>";
}

?>