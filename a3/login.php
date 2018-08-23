<?php
	session_start();
	require_once("tools.php");
	
	topModule("login page");

?>
    
	<article class="main">  
		<fieldset>
			<legend class="heading2">Please login / Register</legend>
			<form method="post" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php"> 
				<p>User Name: <br><input class="form" name="email" type="email" placeholder="email@example.com" required /></p>
				<p>Password: <br><input class="form" name="password" type="password" required /></p>
				<span><input class="form button" type="submit" value="Login" /></span>
				<span style="float: right;"><a href="checkout.php"><input class="form button" value="Register"></a></span>		
			</form>
		</fieldset>
	</article>
	
<?php
	endModule();
	error_reporting( E_ERROR | E_WARNING | E_PARSE );
?>

