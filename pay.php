<?php
$con=mysqli_connect('localhost','root');

if($con){	
	echo "Connection successful";
}else{
echo"No connection";
}mysqli_select_db($con, 'projectdata'); 
$card=$_POST['card'];
$nameoc=$_POST['nameoc'];
$month=$_POST['month'];
$year=$_POST['year'];
$cvv=$_POST['cvv'];

$query="insert into payment(card, nameoc, month, year, cvv) values('$card', '$nameoc', '$month', '$year', '$cvv')";
echo "$query";
mysqli_query($con, $query);
header('location:success.php');

?>