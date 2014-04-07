<?php

// this validation_function.php is for any websites validation.

// function has_presence check the value exists or not.
function has_presence($value) {
	return isset($value) && $value !== "";
}

function has_min_length($value, $max) {
	return strlen($value) >= $min;
}

function has_max_length($value, $max) {
	return strlen($value) <= $max;
}

//php::in_array();
function has_inclusion_in($value, $set) {
	return in_array($value, $set);
}

?>