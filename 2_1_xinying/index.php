<?php include_once "lib/php/functions.php"; ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Peppercorn Kitchen</title>

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" type="text/css" href="lib/css/styleguide.css">
	<link rel="stylesheet" type="text/css" href="lib/css/gridsystem.css">
	<link rel="stylesheet" type="text/css" href="css/storetheme.css">
	<link rel="stylesheet" href="https://use.typekit.net/arl3erg.css">
</head>
<body>
	

	<!--header>h1+p -->
	<header class="navbar">
		<div class="container display-flex" id="navbar-style">
			<div>
				<img id="logo" src="img/peppercorn_logo.png" />
			</div>
			<div class="flex-none">
				<h1>Peppercorn Kitchen</h1>
			</div>
			<!--nav.nav>ul>li*3> -->
			<div class="flex-stretch"></div>
			<nav class="flex-none nav">
				<ul class="container display-flex">
					<li ><a href="#articlel">HOME</a></li>
					<li ><a href="product_list.php">MENU</a></li>
					<li ><a href="product_cart.php">CART</a></li>
					<li ><a href="#articlel">CONTACT US</a></li>
				</ul>
			</nav>
		</div>
	</header>


	<div class="view-window" style="background-image: url('img/peppercorn_view.jpg');"></div>

	<div class="container">

		<article id="article1" class="article card soft">
			<h2>Specialties</h2>
			<div class="article-body">
				<p>Peppercorn Kitchen is a fast casual restaurant serving mouth-watering Sichuan flavors with fresh ingredients and family recipes.
			</div>
		</article>
	

		<article id="article2" class="article card soft">
			<h2>History</h2>
			<div class="article-body">
				<p>Established in 2018. Sichuan Peppercorn is a commonly used spice in Chinese cuisine, especially Sichuan cuisine. It is the source of tingling/numbing effect on your tongue after tasting Mapo Tofu or Boiling Fish. We named ourselves Peppercorn Kitchen due to our crazy obsession with the spice; we want you to be addicted to this magical spice after tasting our food just as much as we are. In Peppercorn Kitchen, we never compromise the flavors that are so close to our hearts. "Because we never forget where we come from."
			</div>
		</article>

		<div class="card soft">
			<h2>Menu</h2>
			<script>
			const makeTable = (classes='') => {
				const head = ['ID','Product Name','Flavor','Price'];
				const body = [
					["Sigrature Mala Tang",'Spicy','$9.99'],
					["Vegetable Mala Tang",'Mild','$9.99'],
					["Dumplings in Chili Oil",'Spicy','$6.99'],
					["Silken Tofu",'Mild','$5.99'],
					["Sichuan Fries",'Spicy','$4.99'],
					["Sichuan Jelly",'Sweet','$3.99'],
				];

				//let ran = Math.floor(Math.random()*links.length);
				document.write(`
				<table class="${classes}">
					<thead><tr>${head.reduce((r,o)=>r+`<th>${o}</th>`,'')}</tr></thead>
					<tbody>${body.reduce((r,o,i)=>r+
						`<tr>${
							[i+1,...o].reduce((r,o)=>r+`<td>${o}</td>`,'')
						}</tr>`,'')
					}</tbody>
				</table>
				`);
			}
			</script>

			<script>makeTable("table lined vertical")</script>
		</div>
	</div>
		
	

	<div class="container">
		<article id="article3" class="article card hard">
			<h2>Location</h2>
			<div class="article-body">
				<p>289 Mercer St
				New York, NY 10003
				b/t Waverly Pl & 8th St
				Greenwich Village
			</div>
		</article>
	</div>
</body>









