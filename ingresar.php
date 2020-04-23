<html>
	<head>
		<title>Log In</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<?php
		
		
		if (isset( $_GET['error']) && $_GET['error']=="yes") {
			echo "Your ussername or your password are incorrect<br/><br/>";
		}
		
		?>

		<form action="ingresar2.php" method="post">
			<input type="text" name="username" size="10" placeholder="Your username" /><br/>
			<input type="password" name="password" size="16" placeholder="Your password" /><br/>
		
				
			<input type="submit" value="Log In" />


			
		</form>

	</body>
</html>