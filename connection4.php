
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
			background:url(images/travel5.gif)no-repeat center center fixed;
			-webkit-background-size:cover;
			-moz-background-size:cover;
			-o-background-size:cover;
			background-size:cover;
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
			margin:auto;
		}
		th,td{
			border:1px solid #9A9A9A;
			padding:8px 30px;
			text-align:center;
			color:#000;
		}
		th{
			background-color:#7a5000;
			color:#fff;
			text-transform:uppercase;
			font-weight: 500;
		}
		td{
			font-size:13px;
		}
		h5{
			position:relative;
			text-align:center;
			margin-top: 20px;
			margin-bottom: 15px;
			color:#fcf5cc;
		}

		.btn{
			background-color:#fcf5cc;
			color:#000;
			text-align:center;
 			position: absolute;
  			right: 40px;
  			width:120px;
  			padding: 10px;
		
		}
		.btn1{
			position:relative;
			width:30%;
			text-align:center;
			background-color:#fcf5cc;
			color:#000;
			text-decoration: none;
			padding:10px;
			display:block;
  			margin-left: auto;
  			margin-right: auto;
			border-radius:8px;
			box-shadow: 0 5px 5px rgba(0,0,0,0.15);
		}
		a:hover, a:active {
  			color:#9A9A9A;
			text-decoration:none;
		}
			
	</style>	
</head>
<body>	
<div class="main-div">
	<h1>Your Plan..</h1>
<div class="center-div">
	<div class="table-responsive">
		<table>
			<thead>
				<tr>
					<th>user</th>
					<th>email</th>
					<th>phone</th>
					<th>traveller</th>
					<th>children</th>
					<th>adults</th>
					<th>Transportation</th>
					<th>package</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$conn=mysqli_connect('localhost','root','','projectdata');
					$query=mysqli_query($conn,"SELECT * FROM haridwar ORDER BY id DESC LIMIT 1");
					$print_data=mysqli_fetch_array($query);
					?>
				<tr>
					<td><?php echo $print_data['user'];?></td>
					<td><?php echo $print_data['email'];?></td>
					<td><?php echo $print_data['phone'];?></td>
					<td><?php echo $print_data['traveller'];?></td>
					<td><?php echo $print_data['children'];?></td>
					<td><?php echo $print_data['adults'];?></td>
					<td><?php echo $print_data['Transportation'];?></td>
					<td><?php echo $print_data['package'];?></td>
				</tr>
			</tbody>	
				
					
		</table>
	</div>	
</div>
</div><br><br>
<a href="payment.php" class="btn1"><h2>Book Your PLAN NOW in just <i class="fa fa-inr" aria-hidden="true" name="pay">4999/-</i></h2></a>
<h5>Your inputs have been recorded.You will shortly receive an email containing the best deal according to your plan...</h5>
<a href="index1.php" class="btn">&nbsp;&nbsp;&nbsp;&nbsp;OK&nbsp;&nbsp;&nbsp;&nbsp;</a>


</body>
</html>