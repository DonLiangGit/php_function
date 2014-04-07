<!-- session starts with cookie and cookie starts with header -->
<?php 
	session_start(); 
?>

<html lang="en">
	<head>
		<title>Sessions</title>
	</head>
	
	<body>
		<?php
		$_SESSION["first_name"] = "Don";
		$name = $_SESSION["first_name"];
		
		echo $name;
		?>
	</body>
</html>