<!-- there is another function has not been implemented yet: Redirect Function. -->
<!-- Single Form submit implementation -->
<?php
	require_once("validation_function.php");
	
	$errors = array();
	
	if (isset($_POST['submit'])) {
		// form was submitted
		$username = trim($_POST["username"]);
		$password = trim($_POST["password"]);
		
		$message = "";
		
		$flag = 0;
		$fields_required = array("username", "password");		
		foreach ($fields_required as $field) {
			$value = trim($_POST["$field"]);
			if (!has_presence($value)) {
				$errors[$field] = "{$field} can't be blank";
				echo "{$errors[$field]} <br />";
				$flag ++;
			}
		}
		
		if ($flag == 0) {
			$message = "logging as {$username}";
		}
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
		
		<?php echo $message;?>
		<br />
		
		<form action="form_singlepage_validation.php" method="post">
			Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"/><br />
			Password: <input type="password" name="password" value=""/><br />
			<br/>
			<input type="submit" name="submit" value="Submit" />
		</form>
	</body>
	
</html>