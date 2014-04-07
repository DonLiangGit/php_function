<!-- there is another function has not been implemented yet: Redirect Function. -->
<!-- Single Form submit implementation -->
<?php
	if (isset($_POST['submit'])) {
		// form was submitted
		$username = $_POST["username"];
		$password = $_POST["password"];
		$message = "logging as {$username}";
	} else {
		$username = "";
		$message = "Please log in.";
	}			
?>

<!DOCTYPE html PUBLIC >
<html lang="en">
	<head>
		<title>Form</title>
	</head>
	<body>
		<?php echo $message; ?><br />

		
		<form action="form_singlepage.php" method="post">
			Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"/><br />
			Password: <input type="password" name="password" value=""/><br />
			<br/>
			<input type="submit" name="submit" value="Submit" />
		</form>
	</body>
	
</html>