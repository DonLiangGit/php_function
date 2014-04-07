<?php
	//setcookie($name, $value, $expire);
	$name = "Don";
	$value = "Awesome";
	$expire = time() + (60*60*24*7); //add seconds
	//setcookie($name, $value, $expire);
	
	//setcookie($name); 
	//unset the cookie.
	setcookie($name, null, $expire);
?>

<html lang="en">
	<head>
		<title>Cookies</title>
	</head>
	
	<body>
		<pre>
			<?php 
			if (isset($_COOKIE["Don"])) {
				$value = $_COOKIE["Don"];				
			} else { $value = "No value exists";}
			echo $value;
			?>
		</pre>
	</body>
</html>