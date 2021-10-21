<?php
$con=mysqli_connect('localhost','root');

if($con){	
	echo "Connection successful";
}else{
echo"No connection";
}mysqli_select_db($con, 'projectdata'); 
$user=$_POST['user'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$traveller=$_POST['traveller'];
$children=$_POST['children'];
$adults=$_POST['adults'];
$Transportation=$_POST['Transportation'];
$package=$_POST['package'];

$query="insert into jaipur(user, email, phone, traveller, children, adults, Transportation, package) 
values('$user', '$email', '$phone', '$traveller', '$children', '$adults', '$Transportation','$package')";
echo "$query";
mysqli_query($con, $query);
header('location:connection3.php');

?>