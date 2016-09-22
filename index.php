<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Shakespearian Password Generator</title>
	<?php require 'generator.php'; ?>
	
	<link href='css/styles.css' rel='stylesheet'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
	<div class='container'>
		<h1 style="font-family:courier;">Shakespearian Password Generator</h1>

		<p class='password'>
			<?php
				echo $password
			?>
		</p>

		<form method='POST' action='index.php'>
			<p class='options'>

				<label for='number_of_words'>Number of Words</label>
				<input maxlength=1 type='text' name='word_count' id='word_count' value=<?php echo "\"".$wordCount."\"" ?> >  (Max 9)
				<br>

				<input type='checkbox' name='add_number' id='add_number' <?php if ($addNumber == 'on'){echo 'checked';}?>>
				<label for='add_number'>Add a number</label>
				<br>
				<input type='checkbox' name='add_symbol' id='add_symbol' <?php if ($addSymbol == 'on'){echo 'checked';}?>>
				<label for='add_symbol'>Add a symbol</label>
			</p>

			<input type='submit' class='btn btn-default' value='Another'>

							<div class='error'>
								<?php echo $error?>
									</div>
			
		</form>
	

	
	<img class="img-responsive" src="img/shakespeare.jpg" alt="shakespeare" width="2000" height="345">
		
	</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="js/bootstrap.min.js"></script>
</body>
</html>