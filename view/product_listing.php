<!DOCTYPE html>

<html>

<head>
	<title>CathyKDesigns - Custom Handmade Tablet Covers and Cases</title>
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<link type="text/css" rel="stylesheet" href="css/product_style.css">
</head>

<body>

<div id="container">

	<div id="header">
		<img src="images/homepagebanner.jpg">
	</div>

	<div id="nav">
		<ul>
			<li><a href="index.php?action=home">Home</a></li>
			<li><a href="index.php?action=store">Store</a></li>
			<li><a href="index.php?action=aboutme">About Me</a></li>
			<li><a href="index.php?action=contactme">Contact Me</a><li>
			<li><a target="_blank" href="https://www.etsy.com/shop/CathyKDesigns">My Etsy Shop</a></li>
		</ul>
	</div>

	<div id="sidebar">
		<h3>Similar Cases:</h3>
	</div>

	<div id="content">
		<h2><?php echo format_case_name($current_product['style'], $current_product['fabric']); ?></h2>
		<div id="price_info">

			<div id="price">
				<h3>Price</h3>
				<?php echo number_format($current_product['price'], 2); ?>
			</div>
			
			<div id="info">
				<ul>
					<li>In Stock</li>
					<li>Handmade</li>
					<li>Ships in 2-3 Days</li>
					<li>Protects Your Device</li>
				</ul>
			</div>

		</div>

		<div id="photos">
		</div>
		
		<div id="description">
			<?php echo $description; ?>
		</div>
	</div>

	<div id="footer">
	</div>

</div>

</body>

</html>
