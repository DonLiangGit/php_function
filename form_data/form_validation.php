<!DOCTYPE html PUBLIC >

<!--  -->

<html lang="en">
	<head>
		<title>Form Validations</title>
	</head>
	
	<body>
		
		<?php
			$errors = array();
			
			$value = "x";
			if (!isset($value) || empty($value)) {
				$errors[] = "Value can't be blank";
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
		?>
	</body>
</html>