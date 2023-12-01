<?php
include("connect.php");
$name= $_REQUEST['fullname'];
$email= $_REQUEST['email'];
$phone= $_REQUEST['mobile'];
$pass= $_REQUEST['password'];
$confirm= $_REQUEST['conpassword'];
/* echo $name, $email, $phone, $pass, $confirm; */
$sql= "SELECT * FROM registration WHERE email='$email'";
$data= mysqli_query($conn,$sql);
if (mysqli_num_rows($data)>0)
{
    echo "<script> alert('EMAILID ALREADY EXISTS')</script>";
    echo "<script> window.location.href='index.html'</script>";

}
else
{
    $sql= "INSERT INTO registration(user_id, name, email, phone, password, conpassword) VALUES ('','$name','$email','$phone','$pass','$confirm')";
    $data= mysqli_query($conn,$sql);
    if ($data)
        {
            echo "<script> alert('Sign Up Successfull')</script>";
            echo "<script> window.location.href='index.html'</script>";
        }
    else
        {
            echo "Not Inserted";
        }
}

?>