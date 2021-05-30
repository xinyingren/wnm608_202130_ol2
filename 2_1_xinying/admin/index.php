<?php

include "../lib/php/functions.php";

$empty_product = (object)[
	"name"=>"",
	"description"=>"",
	"price"=>"",
	"category"=>"",
	"thumbnail"=>"",
	"images"=>""
];








// TEMPLATES
function productListItem($r,$o) {
return $r.<<<HTML
<div><a href="{$_SERVER['PHP_SELF']}?id=$o->id">$o->name</a></div>
HTML;
}
function showProductPage($o) {
return $r.<<<HTML
<div>$o->name</div>
<div>$o->price</div>
HTML;
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Admin Page</title>

	<?php include "../parts/meta.php"; ?>
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Product Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
				</ul>
			</nav>
		</div>
	</header>
	
	<div class="container">
			
			<?php 

			if(isset($_GET['id'])) {
				echo showProductPage(
					$_GET['id']=="new" ?
						$empty_product :
						makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
				);
			} else {

			?>

			<h2>Product List</h2>
			<?php

			$result = makeQuery(makeConn(),"SELECT * FROM `products`");

			echo array_reduce($result,'productListItem');

			}

			?>
			
	</div>
</body>