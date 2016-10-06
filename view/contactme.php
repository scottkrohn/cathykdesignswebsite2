<!DOCTYPE html>

<?php
	/* Check if the various contact fields have been filled out. If not, set an error message.
	*/
	if(isset($_POST['contact_name']) || isset($_POST['contact_email']) || isset($_POST['contact_text'])) {
		$contact_name = $_POST['contact_name'];
		$contact_email = $_POST['contact_email'];
		$contact_text = $_POST['contact_text'];
		if(empty($contact_name)) {
			$error_message = 'You must enter your name.';
		} else if(empty($contact_email)) {
			$error_message = 'You must enter your e-mail address.';
		} else if(empty($contact_text)) {
			$error_message = 'You must enter a message.';
		}
	} 

	// If no error message is set, attempt to send an e-mail.
	if(!empty($error_message))
	{
		$destination_email = 'skrohn86@gmai.com'
		if(!mail($destination_email, "test email", $contact_text)) {
			$error_message = 'We were unable to send your message, please try again.';
		} else {
			echo 'Message sent';
		}
	}
?>

<html>

<head>
	<title>CathyKDesigns - Custom Handmade Tablet Covers and Cases</title>
	<link type="text/css" rel="stylesheet" href="css/style.css">
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
		<form action="index.php?action=contactme" method="POST">
			<?php if(isset($error_message)) {echo '<p><strong>'.$error_message.'</p></strong>';} ?>
			<label>Name:</label><br>
			<input type="text" maxlength=30 name="contact_name"><br><br>
			<label>E-Mail Address:</label><br>
			<input type="text" maxlength=30 name="contact_email"><br><br>
			<label>Your Message:</label><br>
			<textarea name="contact_text" rows="10" cols="40"></textarea><br>
			<input type="submit" name="Submit">
		</form>
	</div>

	<div id="footer">
	</div>

</div>

</body>

</html>


