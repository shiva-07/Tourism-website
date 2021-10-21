<!DOCTYPE HTML>
<head>
<title></title>
 	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style>
body
{
	background:url(images/andamanc5.jpg)no-repeat center center fixed;
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	background-size:cover;
	backdrop-filter:blur(8px);
	
}
section
{
	color:#fff;
}
#new
{
	color:#000000;
}
</style>
</head>
<body>

<section class="my-2">
	<div class="py-2">
		<h2 class="text-center" id="contactus">Let's Plan...</h2>
	</div>
	<div class="w-50 m-auto">
		<form action="andaman.php" method="post">
		<div class="form-group">
			<label for="user">Name:</label>
			<input type="text" class="form-control" id="user" placeholder="Enter name" name="user" required> 
	   </div>
	   <div class="form-group">
			<label for="email">Email Address:</label>
			<input type="email" class="form-control" placeholder="Enter email" id="email" name="email" required>
	   </div>
	   <div class="form-group">
			<label for="phone">Phone Number:</label>
			<input type="tel" class="form-control" placeholder="Enter number" id="phone"name="phone"  maxlength =10 required>
	   </div>

	
	<div class="form-group row">
    		<label for="traveller" class="col-sm-3 col-form-label">Number of Traveller:</label>	
			<input type="number" id="new" name="traveller">
	</div>
	
	<div class="form-group row">
    		<label for="traveller" class="col-sm-3 col-form-label">Number of   Children:</label>	
  <input type="number" id="new" name="children">
   <label for="traveller" class="col-sm-1 col-form-label">Adults:</label>&nbsp;&nbsp;	
  <input type="number" id="new" name="adults">
	</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}
</script>
	



	<label for="inputState">Travel By:</label>
		<select class="form-control" id="school" name="Transportation">
		<option selected>select</option>
		<option>By Cruise</option>
		<option>By Flight</option>
		</select><br>

		<h2>Select Your Package</h2>
			<div class="container-fluid">
		<div class="col-lg-6 col md-4 col-12">
			<img class="card-img-top" src="images\hotel-l.jpg" alt="Card image">
			<h3>Luxury</h3>
			<ul style="list-style-type:square;">
				<li><i class="fa fa-calendar" aria-hidden="true"> 5D/4N</i></li>
				<li><i class="fa fa-star" aria-hidden="true"> 5/3 Star Hotel</i></li>
				<li><i class="fa fa-cutlery" aria-hidden="true"> FOOD & Drink</i></li>
				<li><i class="fa fa-wifi" aria-hidden="true"> Free WiFi</i></li>
				<li><i class="fa fa-car" aria-hidden="true"> Parking</i></li>
				<li><i class="fa fa-shower" aria-hidden="true"> Cleaning services</i></li>
				<li><i class="fa fa-lock" aria-hidden="true"> Safety & Security</i></li>
				<li><i class="fa fa-futbol-o" aria-hidden="true"> Fitness center & Clubhouse</i></li>
				<li>Starting from <i class="fa fa-inr" aria-hidden="true">8500 per night for 2adults</i></li>
			</ul>
	</div>
	
	<div class="col-lg-6 col-md-4 col-12">
			<img class="card-img-top" src="images\hotel-b.jpg" alt="Card image">
			<h3>Basic:</h3>
			<ul style="list-style-type:square;">
				<li><i class="fa fa-calendar" aria-hidden="true"> 4D/3N</i></li>
				<li><i class="fa fa-cutlery" aria-hidden="true"> FOOD</i></li>
				<li><i class="fa fa-wifi" aria-hidden="true"> Free WiFi</i></li>
				<li><i class="fa fa-car" aria-hidden="true"> Parking</i></li>
				<li><i class="fa fa-shower" aria-hidden="true"> Cleaning services</i></li>
				<li><i class="fa fa-lock" aria-hidden="true"> Safety & Security</i></li>
				<li><i class="fa fa-inr" aria-hidden="true"> 8970 per person</i></li>
			</ul>
	</div>
	</div><br>

	
	<select class="form-control" id="package" name="package" >
		<option>Select Package Name</option>
		<option>Luxury</option>
		<option>Basic</option>
	</select><br>
	
	   <button type="submit" class="btn btn-success">Submit</button>
	   </form>
	</div>
</section>



</body>
</html>