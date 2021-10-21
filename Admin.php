
<!DOCTYPE HTML>
<head>
<title></title>
 	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="font1.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<style>
		body{
			margin:30px;
		}

		h1{
			text-align:center;
			margin-top:50px;
			padding:10px;

		}
		table{
			border-collapse:collapse;
			background-color:#fff;
			box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
			border-radius:110px;
			margin-left: auto;
  			margin-right: auto;
		}
		th,td{
			border:1px solid #9A9A9A;
			padding:8px 30px;
			text-align:center;
			color:#000;
		}
		th{
			background-color:#371c79;
			color:#fff;
			text-transform:uppercase;
			font-weight: 500;
		}
		td{
		font-size:13px;
		}
		
		
	</style>	
</head>
<body>
<!--Registration-->
<div class="main-div">
	<h1>Registration</h1>
<div class="center-div">
	<div class="table-responsive">
		<table>
			<thead>
				<tr>
					<th>id</th>
					<th>username</th>
					<th>email</th>
					<th>phone</th>
					<th>password</th>
					<th>cpassword</th>
					<th colspan="2">Operation</th>

				</tr>
			</thead>
			<tbody>
				<?php
					include 'dbcon.php';
					$selectquery ="select*from signup";
					$query = mysqli_query($con,$selectquery);
					$nums = mysqli_num_rows($query);
					while($res = mysqli_fetch_array($query)){
				?>			
				<tr>
					<td><?php echo $res['id'];?></td>
					<td><?php echo $res['username'];?></td>
					<td><?php echo $res['email'];?></td>
					<td><?php echo $res['phone'];?></td>
					<td><?php echo $res['password'];?></td>
					<td><?php echo $res['cpassword'];?></td>
					<td><i class="fa fa-edit" aria-hidden="true"></i></td>
					<td><i class="fa fa-trash" aria-hidden="true"></i></td>
					
				</tr>
				<?php
					}
				?>
			</tbody>	
				
					
		</table>
	</div>	
</div>
</div>	

<!--Ladakh Records-->
<div class="main-div">
	<h1>Ladakh Records</h1>
<div class="center-div">
	<div class="table-responsive">
		<table>
			<thead>
				<tr>
					<th>id</th>
					<th>user</th>
					<th>email</th>
					<th>phone</th>
					<th>traveller</th>
					<th>children</th>
					<th>adults</th>
					<th>Transportation</th>
					<th>package</th>
					<th colspan="2">Operation</th>

				</tr>
			</thead>
			<tbody>
				<?php
					include 'dbcon.php';
					$selectquery ="select*from ladakh";
					$query = mysqli_query($con,$selectquery);
					$nums = mysqli_num_rows($query);
					while($res = mysqli_fetch_array($query)){
				?>			
				<tr>
					<td><?php echo $res['id'];?></td>
					<td><?php echo $res['user'];?></td>
					<td><?php echo $res['email'];?></td>
					<td><?php echo $res['phone'];?></td>
					<td><?php echo $res['traveller'];?></td>
					<td><?php echo $res['children'];?></td>
					<td><?php echo $res['adults'];?></td>
					<td><?php echo $res['Transportation'];?></td>
					<td><?php echo $res['package'];?></td>
					<td><i class="fa fa-edit" aria-hidden="true"></i></td>
					<td><i class="fa fa-trash" aria-hidden="true"></i></td>
					
				</tr>
				<?php
					}
				?>
			</tbody>	
				
					
		</table>
	</div>	
</div>
</div>

<!--Andaman Record-->
<div class="main-div">
	<h1>Andaman Records</h1>
<div class="center-div">
	<div class="table-responsive">
		<table>
			<thead>
				<tr>
					<th>id</th>
					<th>user</th>
					<th>email</th>
					<th>phone</th>
					<th>traveller</th>
					<th>children</th>
					<th>adults</th>
					<th>Transportation</th>
					<th>package</th>
					<th colspan="2">Operation</th>

				</tr>
			</thead>
			<tbody>
				<?php
					include 'dbcon.php';
					$selectquery ="select*from andaman";
					$query = mysqli_query($con,$selectquery);
					$nums = mysqli_num_rows($query);
					while($res = mysqli_fetch_array($query)){
				?>			
				<tr>
					<td><?php echo $res['id'];?></td>
					<td><?php echo $res['user'];?></td>
					<td><?php echo $res['email'];?></td>
					<td><?php echo $res['phone'];?></td>
					<td><?php echo $res['traveller'];?></td>
					<td><?php echo $res['children'];?></td>
					<td><?php echo $res['adults'];?></td>
					<td><?php echo $res['Transportation'];?></td>
					<td><?php echo $res['package'];?></td>
					<td><i class="fa fa-edit" aria-hidden="true"></i></td>
					<td><i class="fa fa-trash" aria-hidden="true"></i></td>
					
				</tr>
				<?php
					}
				?>
			</tbody>	
				
					
		</table>
	</div>	
</div>
</div>

<!--Jaipur Records-->
<div class="main-div">
	<h1>Jaipur Records</h1>
<div class="center-div">
	<div class="table-responsive">
		<table>
			<thead>
				<tr>
					<th>id</th>
					<th>user</th>
					<th>email</th>
					<th>phone</th>
					<th>traveller</th>
					<th>children</th>
					<th>adults</th>
					<th>Transportation</th>
					<th>package</th>
					<th colspan="2">Operation</th>

				</tr>
			</thead>
			<tbody>
				<?php
					include 'dbcon.php';
					$selectquery ="select*from jaipur";
					$query = mysqli_query($con,$selectquery);
					$nums = mysqli_num_rows($query);
					while($res = mysqli_fetch_array($query)){
				?>			
				<tr>
					<td><?php echo $res['id'];?></td>
					<td><?php echo $res['user'];?></td>
					<td><?php echo $res['email'];?></td>
					<td><?php echo $res['phone'];?></td>
					<td><?php echo $res['traveller'];?></td>
					<td><?php echo $res['children'];?></td>
					<td><?php echo $res['adults'];?></td>
					<td><?php echo $res['Transportation'];?></td>
					<td><?php echo $res['package'];?></td>
					<td><i class="fa fa-edit" aria-hidden="true"></i></td>
					<td><i class="fa fa-trash" aria-hidden="true"></i></td>
					
				</tr>
				<?php
					}
				?>
			</tbody>	
				
					
		</table>
	</div>	
</div>
</div>

<!--Haridwar Records-->
<div class="main-div">
	<h1>Haridwar Records</h1>
<div class="center-div">
	<div class="table-responsive">
		<table>
			<thead>
				<tr>
					<th>id</th>
					<th>user</th>
					<th>email</th>
					<th>phone</th>
					<th>traveller</th>
					<th>children</th>
					<th>adults</th>
					<th>Transportation</th>
					<th>package</th>
					<th colspan="2">Operation</th>

				</tr>
			</thead>
			<tbody>
				<?php
					include 'dbcon.php';
					$selectquery ="select*from haridwar";
					$query = mysqli_query($con,$selectquery);
					$nums = mysqli_num_rows($query);
					while($res = mysqli_fetch_array($query)){
				?>			
				<tr>
					<td><?php echo $res['id'];?></td>
					<td><?php echo $res['user'];?></td>
					<td><?php echo $res['email'];?></td>
					<td><?php echo $res['phone'];?></td>
					<td><?php echo $res['traveller'];?></td>
					<td><?php echo $res['children'];?></td>
					<td><?php echo $res['adults'];?></td>
					<td><?php echo $res['Transportation'];?></td>
					<td><?php echo $res['package'];?></td>
					<td><i class="fa fa-edit" aria-hidden="true"></i></td>
					<td><i class="fa fa-trash" aria-hidden="true"></i></td>
					
				</tr>
				<?php
					}
				?>
			</tbody>	
				
					
		</table>
	</div>	
</div>
</div>


<!--Payment-->
<div class="main-div">
	<h1>Payment</h1>
<div class="center-div">
	<div class="table-responsive">
		<table>
			<thead>
				<tr>
					<th>id</th>
					<th>Card Number</th>
					<th>Name On CARD</th>
					<th colspan="2">Expiry Date</th>
					<th>CVV Number</th>
					<th>Payment Status</th>
					<th colspan="2">Operation</th>

				</tr>
			</thead>
			<tbody>
				<?php
					include 'dbcon.php';
					$selectquery ="select*from payment";
					$query = mysqli_query($con,$selectquery);
					$nums = mysqli_num_rows($query);
					while($res = mysqli_fetch_array($query)){
				?>			
				<tr>
					<td><?php echo $res['id'];?></td>
					<td><?php echo $res['card'];?></td>
					<td><?php echo $res['nameoc'];?></td>
					<td><?php echo $res['month'];?></td>
					<td><?php echo $res['year'];?></td>
					<td><?php echo $res['cvv'];?></td>
					<td><i class="fa fa-check-square-o" aria-hidden="true" style="color:#5CB85C"></i></td>
					<td><i class="fa fa-edit" aria-hidden="true"></i></td>
					<td><i class="fa fa-trash" aria-hidden="true" ></i></td>
					
				</tr>
				<?php
					}
				?>
			</tbody>	
				
					
		</table>
	</div>	
</div>
</div>


<!--Contact Info-->
<div class="main-div">
	<h1>Contact Info</h1>
<div class="center-div">
	<div class="table-responsive">
		<table>
			<thead>
				<tr>
					<th>id</th>
					<th>user</th>
					<th>email</th>
					<th>phone</th>
					<th>Comments</th>
					<th colspan="2">Operation</th>

				</tr>
			</thead>
			<tbody>
				<?php
					include 'dbcon.php';
					$selectquery ="select*from userinfodata";
					$query = mysqli_query($con,$selectquery);
					$nums = mysqli_num_rows($query);
					while($res = mysqli_fetch_array($query)){
				?>			
				<tr>
					<td><?php echo $res['id'];?></td>
					<td><?php echo $res['user'];?></td>
					<td><?php echo $res['email'];?></td>
					<td><?php echo $res['phone'];?></td>
					<td><?php echo $res['comments'];?></td>
					<td><i class="fa fa-edit" aria-hidden="true"></i></td>
					<td><i class="fa fa-trash" aria-hidden="true"></i></td>
					
				</tr>
				<?php
					}
				?>
			</tbody>	
				
					
		</table>
	</div>	
</div>
</div>
</body>
</html>