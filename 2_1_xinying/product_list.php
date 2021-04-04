<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" type="text/css" href="lib/css/styleguide.css">
	<link rel="stylesheet" type="text/css" href="lib/css/gridsystem.css">
	<link rel="stylesheet" type="text/css" href="css/storetheme.css">
	<link rel="stylesheet" href="https://use.typekit.net/arl3erg.css">
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>Product List</h2>

			<!-- ul>li*4>a[href="product_item.php"]>{Product $} -->
			<ul>
				<li><a href="product_item.php?id=1">Product 1</a></li>
				<li><a href="product_item.php?id=2">Product 2</a></li>
				<li><a href="product_item.php?id=3">Product 3</a></li>
				<li><a href="product_item.php?id=4">Product 4</a></li>
			</ul>
		</div>
	</div>

</body>
</html>