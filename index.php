<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset='utf-8'>
    <title>Password Generator</title>
	<?php require 'generator.php'; ?>
</head>

<body>
	<form method='POST' action='index.php'>
	    Number of Words<br>
	    <input type='text' name='word_count'><br>
	    <input type='submit' value='Otra Mas'><br>
	</form>
		<?php
		
			echo generatePassword(5);
		?>
</body>
</html>