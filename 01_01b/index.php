<!DOCTYPE html>
<html>
	<head>
		<title>Validate Form</title>
		<meta name="author" value="Joe Casabona" />
	</head>
	<body>
		<main>
			<?php 
				if ( isset( $_POST['submit'] ) ) {
						$num = (int) $_POST['number'];
						if(is_int($num) && $num > 0)
							{
								echo '<h2>Great! You Have submitted a pasitive integer</h2>';
							} else{
								echo '<h2>ERROR! You did\'t submit a positive number</h2>';
							}
				}
			?>
			<form name="submit_number" method="POST">
				<div>
					<label for="name">Submit a Positive Integer:</label>
					<input type="text" name="number" />
				</div>
				<div><input type="submit" name="submit" value="Submit Number" /></div>
			</form>	
		</main>
	</body>
</html>