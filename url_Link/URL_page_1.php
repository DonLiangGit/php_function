<!DOCTYPE html PUBLIC >

<!-- URL_page_1.php & URL_page_2.php is for url-link implementation using embedded php -->

<html lang="en">
	<head>
		<title>URLs PHP Page 1</title>
	</head>
	
	<body>
	
		<!--# PHP code below is to link the URL--> 
		
		<?php $link_name = "2nd Page"; ?>
		<?php $id = 2; ?>
		<?php $author = "Don & Don Liang"; ?>
		<a href="URL_page_2.php?id=<?php echo $id; ?>
			&author=
			<?php 
			//code below is urlencode and notice the rawurldecode
			// rawurldecode before ? and urldecode after ?
			echo urlencode($author); ?>"
		> 
			<?php echo $link_name; ?> 
		</a>
		
		
		
	</body>
</html>