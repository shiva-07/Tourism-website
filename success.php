<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">                     <link rel="preconnect" href="https://fonts.gstatic.com">
  <style>
	.container{
		width:100%;
		float:left;
		margin: 50px 20px;
		background-color:#fff;
		padding:15px;
		border-radius:8px;
		box-shadow: 0 5px 5px rgba(0,0,0,0.15);
	}
	.get{
		color:#5CB85C;
	}
	.btn{
		position:relative;
		left:75%;
		display:inline-block;
		background-color:#5CB85C;
		color:#fff;
		padding:12px 25px;
		margin:5px;
		text-align:center;
	}
        .reference{
            font-size: 1.1rem;
            font-weight: 600;
        }
        span{
            font-weight: 400;
        }
		 .transaction{
            font-size: 1.1rem;
            font-weight: 600;
        }
        span{
            font-weight: 400;
        }
    </style>


</head>
<body>

<div class="container">

		<h3 class="get">Your Payment has been Successful!</h3>
		<h4>Payment Informathon</h4>
		<div class = "reference">Reference ID: <span id="referenceId"></span></div><br>
		<div class = "transaction">Transaction Id: <span id="transactionId"></span></div><br>
		<p><b>Paid Amount: </b><i class="fa fa-inr" aria-hidden="true" name="pay">4999/-</i></p>
		<p><b>Payment Status:</b>Succeeded</p>
		<a href="index1.php" class="btn"><b>Close</b></a>
</div>
<script>
	  <!--Function for Reference ID-->
	function makeReferenceId(length) {
    let randomChars =
      "ABCSDEFGHIHJKLMNOPQRSTUVWXYZs1234567890";
  
    let result = "";
  
    for (let index = 0; index < length; index++) {
      result += randomChars.charAt(
        Math.floor(Math.random() * randomChars.length)
      );
    }
    referenceId.innerText = result;
    console.log(result);
    return result;
  }
  makeReferenceId(16);
  <!--Function for Tansaction ID-->
  	function makeTransactionId(length) {
    let randomChars =
      "1234567890";
  
    let result = "";
  
    for (let index = 0; index < length; index++) {
      result += randomChars.charAt(
        Math.floor(Math.random() * randomChars.length)
      );
    }
    transactionId.innerText =result;
    console.log(result);
    return result;
  }
  makeTransactionId(12);
</script>
        
</body>
</html>
