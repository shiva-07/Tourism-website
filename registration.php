<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head
<body>

<?php
include'dbcon.php';

if(isset($_POST['submit']))
{
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$phone=mysqli_real_escape_string($con,$_POST['phone']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);
	
	$pass=password_hash($password,PASSWORD_BCRYPT);//incript
	$cpass=password_hash($cpassword,PASSWORD_BCRYPT);
	
	$emailquery = "select * from signup where  email='$email'";
	$query=mysqli_query($con, $emailquery);
	
	$emailcount = mysqli_num_rows($query);
	
	if($emailcount>0){
		echo"email already exists";
	}else{
		if($password===$cpassword){
			
			$insertquery ="INSERT INTO signup(username, email, phone, password, cpassword) 
			values('$username','$email','$phone','$pass','$cpass')";
			$iquery = mysqli_query($con, $insertquery);
			
			if($iquery){
			 ?>
			<script>
				location.replace("index1.php");
			</script>
			<?php
			}else{
				echo"Login Failed!..";
			}
		}else{
			echo"password are not matching";
		}
	}
}
?>
	<div class="card bg-light">
	<article class="card-body mx-auto" style="max-width: 400px;"> 
		<h4 class="card-title mt-3 text-center">Create Account</h4>
		<p class="text-center">Get started with your free account</p> 
	    <p>
			<a href="" class="btn btn-block btn-gmail"> <i class="fa fa-google"></i>Login via Gmail</a>
		</p> 
		<p class="divider-text">
			<span class="bg-light">OR</span>
		</p> 
		<form action="" method="POST">
			<div class="form-group input-group"> 
				<div class="input-group-prepend"> 
					<span class="input-group-text"> <i class="fa fa-user"></i> </span>
				</div>
				<input name="username" class="form-control" placeholder="Full name" type="text" required>
				</div> <!-- form-group//-->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-envelope"></i> </span> 
					</div>
				<input name="email" class="form-control" placeholder="Email address"type="email" required> 
				</div> <!-- form-group// -->
				<div class="form-group input-group">
				<div class="input-group-prepend"> 
					<span class="input-group-text"> <i class="fa fa-phone"></i>
					</span>
				</div>	
					<input name="phone" class="form-control" placeholder="Phonenumber" type="tel"  maxlength = 10 required> 
					</div> <!-- form-group//-->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-lock"></i> 
							</span>
						</div>
						<input class="form-control" placeholder="Create password" type="password" name="password" value="" required>
						</div> <!-- form-group// --> 
						<div class="form-group input-group"> 
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-lock"></i> 
								</span>
							</div>
							<input class="form-control" placeholder="Repeat password"type="password" name="cpassword" required> 
							</div> <!-- form-group// -->
							<div class="form-group">
							<button type="submit" name="submit" class="btn btn-primary btn-block" href="about.php" > Create Account </button>
							</div> <!-- form-group// --> 
							<p class="text-center">Have an account? <a href="login.php">Log In</a> 
							</p>
						</form>
					</article>
				</div> <!-- card.// -->
			</div>
		</div> 
	</div>
</body>
</html>