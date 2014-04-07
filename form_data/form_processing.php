<!DOCTYPE html PUBLIC >
<html lang="en">
	<head>
		<title>Form-Processing</title>
	</head>
	<body>
		<pre>
		<?php
			print_r($_POST);
		?>
		</pre>
		<br />		
		<?php
		
			//check whether the form is submit
			if (isset($_POST["submit"])) {
				echo "the form has been submitted <br />";
				
				//set the default values
				//detect the form submissions
				if (isset($_POST["username"]) && isset($_POST["password"])) {
					$username = $_POST["username"];
					$password = $_POST["password"];
				}
				else {
					$username = "";
					$password = "";
				}
				echo $username;
				echo "{$username}: {$password} <br />";
				
				//another effecient way to implement the default values
				$username = isset($_POST["username"]) ? $_POST["username"] : "";
				$password = isset($_POST["password"]) ? $_POST["password"] : "";
			
				echo $username;
				echo "{$username}: {$password} <br />";
			}
			else{
				echo "form has not been submitted";
			}
		?>
	</body>
	
</html>