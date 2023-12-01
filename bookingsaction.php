<?php
include("connect.php");
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$dob=$_REQUEST['dob'];
$email=$_REQUEST['email'];
$address=$_REQUEST['address'];
$doa=$_REQUEST['doa'];
$dod=$_REQUEST['dod'];
$heads=$_REQUEST['heads'];
$package=$_REQUEST['package'];
/* echo $fname,$lname,$dob,$email,$address,$doa,$dod,$heads,$package; */

$sql="INSERT INTO `bookings`(`user_id`, `firstname`, `lastname`, `dob`, `email`, `address`, `doa`, `dod`, `heads`, `package`) VALUES ('','$fname','$lname','$dob','$email','$address','$doa','$dod','$heads','$package')";
$data= mysqli_query($conn,$sql);
if ($data)
{
    echo "<script> alert('Booking Successfull')</script>";
    echo "<script> window.location.href='bookings.html'</script>";
}
else
{
    echo "Invalid Booking";
}

?>