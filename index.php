<!DOCTYPE HTML>
<html>
<head>
	<title>Placeholder</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

		
	<?php
		if(isset($_POST['emailSubmit']))
			{
				$email = $_POST['email'] . "\r\n";
				$file = fopen("list.txt","a+");
				fwrite($file,$email);
				fclose($file); 
				echo '<p class="confirmation">'.'Your email address has been added!'.'</p>';
			}
	?>
	<div id="content">
	  <form action="" method="post">
		<input type="text" name="email" align="top" placeholder="YOUR EMAIL HERE">
		<input type="image" name="emailSubmit" class="button" value="submit" src="[button-placeholder].png" align="top">
	  </form>
	</div>
</body>
</html>