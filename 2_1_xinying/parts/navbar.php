<?php

include_once "lib/php/functions.php";

?>

<header class="navbar">
		<div class="container display-flex" id="navbar-style">
			<div>
				<img id="logo" src="img/peppercorn_logo.png" />
			</div>
			<div class="flex-none">
				<h1>Peppercron Kitchen</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<!-- li*3>a[href=#]>{Link $} -->
					<li><a href="index.php">HOME</a></li>
					<li><a href="product_list.php">MENU</a></li>
					<li><a href="product_cart.php">
						<span>CART</span>
						<span class="badge"><?= makeCartBadge(); ?></span>
						</a></li>
					<li><a href="contact.php">CONTACT US</a></li>
				</ul>
			</nav>
		</div>
	</header>