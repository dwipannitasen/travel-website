<?php 
include('connect.php'); 
session_start(); 
$email=$_REQUEST['email']; 
$comment=$_REQUEST['comment']; 
/*echo $email,$comment;*/ 
$sql="INSERT INTO contact`(`user_id, email, `comment`) VALUES ('','$email','$comment')"; 
$data= mysqli_query($conn,$sql); 
if ($data)  
{ 
 echo "<script>alert('Thank You for your feedback!')</script>"; 
 echo "<script>window.location.href='index.html'</script>"; 
} 
else 
{ 
 echo "Not Inserted"; 
} 
 
?>