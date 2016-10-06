<!DOCTYPE html>

<html>

<head>
	<title>CathyKDesigns - Custom Handmade Tablet Covers and Cases</title>
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<style>
		div.casestyle {
			position: relative;
			display: none;
			margin-right: 5px;
			margin-left: 5px;
			margin-top: 20px;
			height: 400px;
			width: 205px;
			float: left;
			text-align: center;
			border: 1px black solid;
		}

		div.casestyle p {
			font-size: 15px;
		}

		div.casestyle img {
			margin-top: 20px;
		}

		div#content {
			height: 900px;
		}
	</style>

	<script src="js/jquery.js"></script>
	<script src="js/fade.js"></script>

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
	</div>

	<div id="content">
		<h4>Choose a style of case:</h4>
			<div class="casestyle"> 
				<a href="index.php?action=displaycases&style=regular">Regular</a>
				<p>Our basic tablet and eReader case. This style case has two pockets inside, secures your device with elastic and has an elastic band to keep the case closed and secure.</p>
				<img src="images/storethumbnails/regpeacockthumb.jpg">
			</div>
			<div class="casestyle">
				<a href="index.php?action=displaycases&style=standable">Standable</a>
				<p>This style case allows you to stand your device up so you can watch videos and use your tablet without holding it. It uses elastic to hold your devide in place.</p>
				<img src="images/storethumbnails/standdandylionthumb.jpg">
			</div>
			<div class="casestyle">
				<a href="index.php?action=displaycases&style=ipad">iPad/iPad Mini</a>
				<p>This style case is specifically designed to protect your iPad or iPad Mini. Features the standable design, but also includes fabric corners to give your device extra protection.</p>
				<img src="images/storethumbnails/ipadsummerlandthumb.jpg">
			</div>

			<br>

			<div class="casestyle">
				<a href="index.php?action=displaycases&style=macbook11">MacBook</a>
				<p>This style of case is specifically designed to protect your MacBook laptop. It has three storage pockets for your other items, including one smaller "pen pocket". </p>
				<img src="images/storethumbnails/macbookgreyfeltthumb.jpg">
			</div>
			<div class="casestyle">
				<a href="index.php?action=displaycases?style=surface">Surface</a>
				<p>This style of case is specifically designed to protect your Surface Tablet. It has three storage pockets for your other items, including one smaller "pen pocket". </p>
				<img src="images/storethumbnails/surfacepinkgreychevronthumb.jpg">
			</div>
	</div>

	<div id="footer">
	</div>

</div>

</body>

</html>
