<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	<?php include "pats/meta.php"; ?>
</head>
<body>

	<?php include "pats/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>Product Item</h2>

			<p>This is item # <?= $_GET['id'] ?> </p>
		</div>
	</div>

</body>
</html>