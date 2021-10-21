<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<style>
	.pay{
		width:100%;
		float:left;
		margin: 50px 20px;
		background-color:#fff;
		padding:15px;
		border-radius:8px;
		box-shadow: 0 5px 5px rgba(0,0,0,0.15);
	}
	</style>


</head>
<body>
	<section class="my-5">
	<div class="w-50 m-auto">
	<h2 class="text-center" id="book">BOOK NOW....</h2>
	<div class="pay">
		<form action="pay.php" method="post">
		<h4 id="amt">
		<div class="form-group">
			<label for="card">Card Number:</label>
			<input type="tel" class="form-control" id="card" placeholder="Card Number" name="card" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" required>
	   </div>
		<div class="form-group">
			<label for="nameoc">Name On Card:</label>
			<input type="text" class="form-control" placeholder="Name on Card" id="nameoc" name="nameoc" required>
	   </div>
	   <div class="form-group">
			<label for="date">Expiry Date:</label>
			<input type ="tel" placeholder = "MM" id = "month" name="month" maxlength = 2 required> /
			<input type ="tel" placeholder = "YYYY" id = "year" name="year" maxlength = 4 required>
	   </div>
	   <div class="form-group">
			<label for="cvv">CVV:</label>
			<input type="text" class="form-control" placeholder="CVV" id="cvv" name="cvv" pattern="[0-9\s]{1,3}" 			maxlength="3" inputmode="numeric"  required>
	   </div>


	    <button type="submit" class="btn btn-success">Submit</button>
	   </form>
	</div>
	</div>
</section>

</body>
</html>
