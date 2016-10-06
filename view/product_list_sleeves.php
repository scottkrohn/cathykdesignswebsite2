<!DOCTYPE html>

<html>

<head>
	<title>CathyKDesigns - Custom Handmade Tablet Covers and Cases</title>
	<link type="text/css" rel="stylesheet" href="css/style.css">

	<style type="text/css">

		#col_one {
			border: black solid 1px;
			display: inline-block;
			width: 210px;
		}

		#col_two {
			width: 210px;
			display: inline-block;
			border: black solid 1px;
		}

		#col_three {
			display: inline-block;
			width: 210px;
			border: black solid 1px;
		}

		#listing {
			border: black solid 1px;
			height: 200px;
		}

		div.alt_style_box {
			margin-left: 25px;
			margin-bottom: 10px;
			border: 1px solid black;
			width: 250px;
			height: 220px;
			
		}

		div.alt_style_box p {
			font-size: 13px;
			padding: 5px;
			margin-top: 1px;
			margin-bottom: 1px;
		}

		div.alt_style_box img {
			height: 110px;
		}
		
		h4 {
			padding: 10px;
		}

	</style>
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
		<h4>Want to choose another case style?</h4>
				<div class="alt_style_box">
				<?php echo '<a href="index.php?action=displaycases&style='.$alt_style_one.'">'.ucfirst($alt_style_one).'</a>'; ?>
				<br>
				<?php echo $description_one; ?>
				<?php echo "<img src=\"$pic_one\">"; ?>
			</div>
			<div class="alt_style_box">
				<?php echo '<a href="index.php?action=displaycases&style='.$alt_style_two.'">'.ucfirst($alt_style_two).'</a>'; ?>
				<?php echo $description_two; ?>
				<?php echo "<img src=\"$pic_two\">"; ?>
			</div>

	</div>

	<div id="content">
		
		<div id="col_one">
			<?php
				for($i = 0; $i != 30; $i++) {
					$row = $results->fetch();
					$name = $row['fabric'];
					$id = $row['id'];
					echo '<div id="listing"><a href="index.php?action=productlisting&id='.$id.'">'.$id.'. '.$name.'</a></div><br>';
				}
			?>
		</div>

		<div id="col_two">
			<?php
				for($i = 0; $i != 30; $i++) {
					$row = $results->fetch();
					$name = $row['fabric'];
					$id = $row['id'];
					echo '<div id="listing"><a href="index.php?action=productlisting&id='.$id.'">'.$id.'. '.$name.'</a></div><br>';
				}
			?>
		</div>

		<div id="col_three">
		<?php
				for($i = 0; $i != 30; $i++) {
					$row = $results->fetch();
					$name = $row['fabric'];
					$id = $row['id'];
					echo '<div id="listing"><a href="index.php?action=productlisting&id='.$id.'">'.$id.'. '.$name.'</a></div><br>';
				}
			?>
		</div>

	</div>

	<div id="footer">
	</div>

</div>

</body>

</html>

