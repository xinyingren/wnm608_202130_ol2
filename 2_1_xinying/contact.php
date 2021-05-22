<?php include_once "lib/php/functions.php"; ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact us</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>Contact Us</h2>
			<p>Any concerns? Questions? Just down to chat? Leave us an email, and we’ll get back to you before 24 hours.</p>

			
			<form>
				
				<div class="form-control">
					<label class="form-label">Name</label>
					<input type="name" placeholder="name" class="form-input">
				</div>
				<div class="form-control">
					<label class="form-label">Email</label>
					<input type="email" placeholder="email" class="form-input">
				</div>
				<div class="form-control">
					<label class="form-label">Phone Number</label>
					<input type="number" placeholder="###-###-####" class="form-input">
				</div>
				<div class="form-control">
					<label class="form-label">Message</label>
					<input type="text" placeholder=" " class="form-input">
				</div>
				<div class="form-control">
				<button type="button" class="form-button">Send</button>
			</div>
			</form>
		</div>
	</div>

</body>
</html>