<!DOCTYPE html PUBLIC >

<html lang="en">
	<head>
		<title>URLs PHP Page 2</title>
	</head>
	
	<body>
		<pre>
			<?php
				//print_r($_GET); for testing the _GET global variable value
				//code below using _GET to get the value through different pages.
				$id = $_GET['id'];
				echo $id;
			?>
			<?php
				$author = $_GET['author'];
				echo $author;
			?>
		</pre>
	</body>
</html>