<!DOCTYPE html>
<html lang='en'>
  <head>
	<meta charset="utf-8">
	<title>Assignment 2</title>
	<link rel="Posie Icon" href="../../media/favicon.ico" type="image/x-icon">
	<!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Playfair+Display" rel="stylesheet">
	<!--All immages used are property of "Posie and Me" and are not for reuse-->
  </head>

  <body>
    <div class="wrapper">
		<header>
			<div class="img1"><img src="../../media/PosieAndMe.png" alt="Posie and me logo" width= 200px img></div>
			<div class="header">Posie & Me</div>
			<h1 class="heading3">Custom made accessories for mums and bubs</h1>
		</header>

    <nav class="nav">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="products.php">All Products</a></li>
			<li><a href="design.php">Design Studio</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>  
    </nav>
    
	<article class="main">  
		<fieldset>
			<legend class="heading2">Please login / Register</legend>
			<form method="post" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php"> 
				<p>User Name: <br><input class="form" name="email" type="email" placeholder="email@example.com" required /></p>
				<p>Password: <br><input class="form" name="password" type="password" required /></p>
				<span><input class="form button" type="submit" value="Login" /></span>
				<span style="float: right;"><input class="form button" type="submit" value="Register" /></span>
			</form>
		</fieldset>
	</article>
	
    <footer class="footer">
		<div>&copy;<script>
			document.write(new Date().getFullYear());
		</script> Craig Ryan, s3555490.</div>
		<div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
		<div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

    </div>
  </body>
</html>
