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
	    Enter 5 contestants<br>
	    <input type='text' name='contestant1'><br>
	    <input type='text' name='contestant2'><br>
	    <input type='text' name='contestant3'><br>
	    <input type='text' name='contestant4'><br>
	    <input type='text' name='contestant5'><br>
	    <input type='submit' value='Pick a winner!'><br>
	</form>
	<pre>
	    <?php print_r($_POST); ?>
	</pre>
</body>
</html>