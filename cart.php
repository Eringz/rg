<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Your Shopping Cart</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		<?php
			include 'css/style.css';
            
		?>
	</style>
</head>
<body>
    <?php
        include_once 'header.php';
    ?>
	<br>
	<br>
	<div class="container my-5 py-5 ">
		<div class="card p-5">
			<div class="row">
				<div class="col-8">
					<div class="title mb-5">
						<h4>Shopping Cart</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					
				</div>
				<div class="col">
					<h6>Description</h6>
				</div>
				<div class="col">
					<h6>Price</h6>
				</div>
				<div class="col">
					<h6>Quantity</h6>
				</div>
				<div class="col">
					<h6>Total</h6>
				</div>
			</div>
			<div class="row border-top border-bottom">
				<div class="col-2">
					<img class="img-fluid" src="img/items/helmets/open-face/Scorpion EXO-CT220.jpg">
				</div>
				<div class="col m-auto">
					<div class="row text-muted">
						Scorpion EXO-CT220
					</div>
					<div class="row">
						
					</div>
				</div>
				<div class="col m-auto">
					&#8369; 8,000.00
				</div>
				<div class="col m-auto">
					<a href="">-</a>
					<a href="">1</a>
					<a href="">+</a>
				</div>
				<div class="col m-auto">
					&#8369; 8,000.00
					<a href="" class="pl-3">Remove</a>
				</div>
			</div>
			<div class="row border-bottom">
				<div class="col-2">
					<img class="img-fluid" src="img/items/helmets/fullface/Scorpion EXO-R420 Helmet.jpg">
				</div>
				<div class="col m-auto">
					<div class="row text-muted">
						Scorpion EXO-R420 Helmet
					</div>
					<div class="row">
						
					</div>
				</div>
				<div class="col m-auto">
					&#8369; 8,000.00
				</div>
				<div class="col m-auto">
					<a href="">-</a>
					<a href="">1</a>
					<a href="">+</a>
				</div>
				<div class="col m-auto">
					&#8369; 8,000.00
					<a href="" class="pl-3">Remove</a>
				</div>
			</div>
            
			<div class="row mt-3 justify-content-end">
				<div class="col-2">
					<h4>Subtotal</h4>
				</div>
				<div class="col-2">
					<p class="h4">&#8369; 16,000.00</p>
				</div>
			</div>
			<div class="row mt-3 justify-content-end">
				<div class="col-4">
					<button class="btn" onclick="document.location='checkout.php'">
						Check Out
					</button>
				</div>
			</div>
		</div>
	</div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
<?php
    include_once 'footer.php';
?>
