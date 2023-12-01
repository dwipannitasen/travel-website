<?php 
include('connect.php'); 
session_start(); 
$name= $_REQUEST['name']; 
$email=$_REQUEST['email']; 
$address=$_REQUEST['address']; 
$city=$_REQUEST['city']; 
$state=$_REQUEST['state']; 
$zip=$_REQUEST['zip']; 
$cardname=$_REQUEST['cardname']; 
$cardnum=$_REQUEST['cardnum']; 
$cardmonth=$_REQUEST['cardmonth']; 
$cardyear=$_REQUEST['cardyear']; 
$cvv=$_REQUEST['cvv']; 
/*echo $name, $email, $address, $city, $state, $zip, $cardname, $cardnum, $cardmonth, $cardyear, $cvv;*/ 
$sql= "INSERT INTO payment`(`user_id, name, email, address, city, state, zip_code, card_name, card_num, month, year, `cvv`) VALUES ('','$name', '$email', '$address', '$city', '$state', '$zip', '$cardname', '$cardnum', '$cardmonth', '$cardyear', '$cvv')"; 
$data= mysqli_query($conn,$sql); 
if ($data)  
{ 
 echo "<script>alert('Payment Successful!')</script>"; 
 echo "<script>window.location.href='duplicateindex.html'</script>"; 
} 
else 
{ 
 echo "Not Inserted"; 
} 
 
?>