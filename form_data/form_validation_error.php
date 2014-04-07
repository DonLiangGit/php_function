<!DOCTYPE html PUBLIC >

<!--  -->

<html lang="en">
	<head>
		<title>Form Validations</title>
	</head>
	
	<body>
		
		<?php
			// this block is for validate the input with validation_functon.php
			require_once('validation_function.php');			
			$errors = array();			
			//$username here could use $_POST method 
			$username = trim(" ");			
			if (!has_presence($username)) {
				$errors['username'] = "Username can not be blank";
				echo "{$errors['username']} <br />";
			}			
		?>
		<?php
		
			$errors = array();
			
			
			$value = "";
			if (!isset($value) || empty($value)) {
				// $errors['keyname'] = value
				$errors['value'] = "Value can't be blank"; 
			}
			
			// check type
			if (!is_string($value)) {
				echo "Validation failed.<br />";
			}
			//set minimum value of the string
			$value = "123";
			$min = 3;
			if (strlen($value) < $min) {
				echo "Validation failed.<br />";
			}
			
			//set maximum value of the string
			$value = "";
			$max = 9;
			if (strlen($value) > $max) {
				echo "Validation failed. <br />";
			}
			
			// check format
			// using a regex on a string
			// preg_match($regex, $subject) 
			$value = "php is cool!.";
			if (preg_match("/php/",  $value)) {
				echo "php is found in this string.";
			}
			else {
				echo "php is not found in this string.";
			}
			
			//also the method above is not the fastest one could use php::strpos();
			//but be careful that php does type juggling in comparisons. solution using triple equals
			//empty() function
			
			print_r($errors);
			
			//more user friendly error coding.
			//define a function to dealing with the errors display.
			function form_errors($errors = array()) {
				$output = "";
				if (!empty($errors)) {
					// using the .= operator to assign a longer complex string. 
					$output .= "<div class=\"error\">";
					$output .="Please fix the following errors:";
					$output .= "<ul>";
					// foreach (array_expression as $key => $value)
					foreach ($errors as $key => $error) {
						$output .= "<li>{$key}</li>";
						$output .= "<li>{$error}</li>";
					} 
					$output .= "</ul>";
					$output .= "</div>";
				}
				return $output;
			}
		?>
		<?php echo form_errors($errors);?>
	</body>
</html>