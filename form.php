<html>
<body>
<form action ="dashboard.php" method="post">
	<form action="" method="post">
	<p>Login</p>
	<?php
	if (isset ($_GET ['ere']))
			echo "Please";
	?>
	<p>Username: 
	<br /> <input type="text" name="username" /> </p>
	<p>Password:
	<br /> <input type="password" name="password" /> </p>
	<br /> <input type="submit" value="Login" />  <input type="reset" value="Clear" />
	</form>
	
	
	<p> Password: 12345</p>
	<?php echo "<p> Encrypted shal: ".sha1('12345')."</p>";?>
	<?php echo "<p> Encrypted md5: ".md5('12345')."</p>";?>
</body>
</html>