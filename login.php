<?php
	session_start();
	
?>

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
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);

	$email_search= "select * from signup where email='$email'";
	$query = mysqli_query($con,$email_search);
	
	$email_count = mysqli_num_rows($query);
	if($email_count){
		$email_pass=mysqli_fetch_assoc($query);
		$db_pass = $email_pass['password'];
		 
		 $pass_decode = password_verify($password, $db_pass);
		
		if($pass_decode){
			echo "login successful";
			?>
			<script>
				location.replace("index1.php");
			</script>
			<?php
		}else{
			echo "Password Incorrect";
		}
	}else{
			echo "Invalid Email";
		}	
}
?>
<div class="card bg-light">
	<article class="card-body mx-auto" style="max-width: 400px;"> 
		<h4 class="card-title mt-3 text-center">Login Account</h4>
		<p class="text-center">Get started with your free account</p> 
	    <p>
			<a href="" class="btn btn-block btn-gmail"> <i class="fa fa-google"></i>Login via Gmail</a>
			
		</p> 
		<p class="divider-text">
			<span class="bg-light">OR</span>
		</p> 
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-envelope"></i> </span> 
							</div>
							<input name="email" class="form-control" placeholder="Email address"type="email" required> 
							</div> <!-- form-group// -->
							<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
							</div>
							<input class="form-control" placeholder="Password" type="password" name="password" value="" required>
							</div> <!-- form-group// --> 
							<div class="form-group">
							<button type="submit" name="submit" class="btn btn-primary btn-block">Login </button>
							</div> <!-- form-group// --> 
							<p class="text-center">Don't Have an account? <a href="registration.php">Sign Up Here</a> 
							</p>
						</form>
					</article>
				</div> <!-- card.// -->
			</div>
		</div> 
	</div>
</body>
</html>