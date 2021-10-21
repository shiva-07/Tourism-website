<?php
$con=mysqli_connect('localhost','root');

if($con){	
	echo "Connection successful";
}else{
echo"No connection";
}
mysqli_select_db($con, 'projectdata'); 
$user=$_POST['user'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$comments=$_POST['comments'];

$query="insert into userinfodata(user, email, phone, comments) 
values('$user', '$email', '$phone','$comments')";
echo "$query";
mysqli_query($con, $query);

header('location:index1.php');

?>