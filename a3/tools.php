<?php
	function topModule($pageTitle) {
		$output = <<<"HEADER"
		
<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>$pageTitle</title>
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
HEADER;
	echo $output;
	}
?>

<?php
	function endModule() {
		$output = <<<"FOOTER"
		
		<footer class="footer">
			<script src='JavaScript/myHelper.js'></script>
			<div>&copy;<script>
				document.write(new Date().getFullYear());
			</script> Craig Ryan, s3555490.</div>
			<div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
			<div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
		</footer>
    
		</div>
	</body>
</html>
FOOTER;
	echo $output;
	}
?>


/*Function to display all products on one page
 - this function reads from a .txt file and outputs to HTML 
 Addoped from w3 schools examples.
*/
<?php
	function productList() {
		//Open the text file
		$myFile = fopen("products.txt", "r") or die("Unable to open file!");
		
		//Loop though to get the required details
		while (!feof($myFile)) {
			
			
		}
		fclose($myFile);
		
		$outputProducts = <<<"ALLPRODUCTS"
		
		
		
?>
