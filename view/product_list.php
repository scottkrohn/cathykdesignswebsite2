<!DOCTYPE html>

<html>

<head>
	<title>CathyKDesigns - Custom Handmade Tablet Covers and Cases</title>
	<link type="text/css" rel="stylesheet" href="css/style.css">

	<style type="text/css">

		#col_one {
			display: inline-block;
			width: 210px;
		}

		#col_two {
			width: 210px;
			display: inline-block;
		}

		#col_three {
			display: inline-block;
			width: 210px;
		}

		#extra_row{
			display: inline-block;
			position: relative;
			left: -3px;
		}

		#listing {
			border: black solid 1px;
			height: 200px;
			margin-bottom: 5px;
		}

		#extra_listing {
			border: black solid 1px;
			margin-left: 6px;
			height: 200px;
			width: 208px;
			float: left;
		}

		div.alt_style_box {
			margin-left: 25px;
			margin-bottom: 10px;
			border: 1px solid black;
			width: 250px;
			height: 200px;
			
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
		<?php if($style == 'regular') {
				$alt_style_one = 'standable';
				$description_one = '<p>This style case allows you to stand your device up so you can watch videos and use your tablet without holding it. It uses elastic to hold your devide in place.</p>';
				$pic_one = 'productphotos/thumbnails/standdandylionthumb.jpg';
				$alt_style_two = 'ipad';
				$description_two ='<p>This style case is specifically designed to protect your iPad or iPad Mini. Features the standable design, but also includes fabric corners to give your device extra protection.</p>';
				$pic_two = 'productphotos/thumbnails/ipadsummerlandthumb.jpg';
			} else if($style == 'standable') {
				$alt_style_one = 'regular';
				$description_one = '<p>Our basic tablet and eReader case. This style case has two pockets inside, secures you device with elastic and has an elastic band to keep the case closed.</p>';
				$pic_one = 'productphotos/thumbnails/regpeacockthumb.jpg';
				$alt_style_two = 'ipad';
				$description_two ='<p>This style case is specifically designed to protect your iPad or iPad Mini. Features the standable design, but also includes fabric corners to give your device extra protection.</p>';
				$pic_two = 'productphotos/thumbnails/ipadsummerlandthumb.jpg';
			} else if($style == 'ipad') {
				$alt_style_one = 'regular';
				$description_one = '<p>Our basic tablet and eReader case. This style case has two pockets inside, secures you device with elastic and has an elastic band to keep the case closed.</p>';
				$pic_one = 'productphotos/thumbnails/regpeacockthumb.jpg';
				$alt_style_two = 'standable';
				$description_two ='<p>This style case allows you to stand your device up so you can watch videos and use your tablet without holding it. It uses elastic to hold your devide in place.</p>';
				$pic_two = 'productphotos/thumbnails/standdandylionthumb.jpg';

			} else if($style == 'macbook11')
			{
				$alt_style_one = 'standable';
				$description_one = '<p>This style case allows you to stand your device up so you can watch videos and use your tablet without holding it. It uses elastic to hold your devide in place.</p>';
				$pic_one = 'productphotos/thumbnails/standdandylionthumb.jpg';
				$alt_style_two = 'ipad';
				$description_two ='<p>This style case is specifically designed to protect your iPad or iPad Mini. Features the standable design, but also includes fabric corners to give your device extra protection.</p>';
				$pic_two = 'productphotos/thumbnails/ipadsummerlandthumb.jpg';

			}
			else if($style == 'surface')
			{
				$alt_style_one = 'standable';
				$description_one = '<p>This style case allows you to stand your device up so you can watch videos and use your tablet without holding it. It uses elastic to hold your devide in place.</p>';
				$pic_one = 'productphotos/thumbnails/standdandylionthumb.jpg';
				$alt_style_two = 'ipad';
				$description_two ='<p>This style case is specifically designed to protect your iPad or iPad Mini. Features the standable design, but also includes fabric corners to give your device extra protection.</p>';
				$pic_two = 'productphotos/thumbnails/ipadsummerlandthumb.jpg';

			}
			?>

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

			$totalCount = $results->rowCount();
			$rowOneCount = (int)($totalCount/3);
			$rowTwoCount = (int)($totalCount/3);
			$rowThreeCount = (int)($totalCount/3);
			$extraCount = (int)($totalCount%3);

				for($i = 0; $i != $rowOneCount; $i++) {
					$row = $results->fetch();
					$name = $row['fabric'];
					$id = $row['id'];
					echo '<div id="listing"><a href="index.php?action=productlisting&id='.$id.'">'.$id.'. '.$name.'</a></div>';
				}
			?>
		</div>

		<div id="col_two">
			<?php
				for($i = 0; $i != $rowTwoCount; $i++) {
					$row = $results->fetch();
					$name = $row['fabric'];
					$id = $row['id'];
					echo '<div id="listing"><a href="index.php?action=productlisting&id='.$id.'">'.$id.'. '.$name.'</a></div>';
				}
			?>
		</div>

		<div id="col_three">
		<?php
				for($i = 0; $i != $rowThreeCount; $i++) {
					$row = $results->fetch();
					$name = $row['fabric'];
					$id = $row['id'];
					echo '<div id="listing"><a href="index.php?action=productlisting&id='.$id.'">'.$id.'. '.$name.'</a></div>';
				}
			?>
		</div>

		<div id="extra_row">
		<?php
				for($i = 0; $i != $extraCount; $i++) {
					$row = $results->fetch();
					$name = $row['fabric'];
					$id = $row['id'];
					echo '<div id="extra_listing"><a href="index.php?action=productlisting&id='.$id.'">'.$id.'. '.$name.'</a></div>';
				}
		?>
		</div>

	</div>

	<div id="footer">
	</div>

</div>

</body>

</html>
