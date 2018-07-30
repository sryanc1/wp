<!DOCTYPE html>
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
    <script src='../myHelper.js'></script>
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
    
    <section class="div1">
		
		<div>
			<p class="heading3">Handbags</p>
		</div>
		<div class="flexDiv">			
			<div class="productDiv">
				<a href="product.php">
					<img class="img4" src="../../media/bag1.jpg" alt="Handbag">			
				</a>	
			</div>
			<div class="productDiv">
				<a href="product.php">
					<img class="img4" src="../../media/bag1.jpg" alt="Handbag">			
				</a>				
			</div>
			<div class="productDiv">
				<a href="product.php">
					<img class="img4" src="../../media/bag1.jpg" alt="Handbag">			
				</a>				
			</div>
			<div class="productDiv">
				<a href="product.php">
					<img class="img4" src="../../media/bag1.jpg" alt="Handbag">			
				</a>				
			</div>								
		</div>	
		
		<div>
			<p class="heading3">Necklaces</p>
		</div>
		<div class="flexDiv">		
			<div class="productDiv">
				<a href="product.php">
					<img class="img4" src="../../media/necklace2.jpg" alt="Mummy necklace">				
				</a>
			</div>		
		</div>
			
		<div>
			<p class="heading3">Earrings</p>
		</div>
		<div class="flexDiv">
			<div class="productDiv">
				<a href="product.php">
					<img class="img4" src="../../media/earings1.jpg" alt="painted striped earrings">				
				</a>
			</div>
		</div>
			
		<div>
			<p class="heading3">Bracelets</p>
		</div>
		<div class="flexDiv">
			<div class="productDiv">
				<a href="product.php">
					<img class="img4" src="../../media/bracelet1.jpg" alt="A range of beaded bracelets">
				</a>
			</div>
		</div>
		
    </section>
        
    <footer class="footer">
		<script src='../myHelper.js'></script>
		<div>&copy;<script>
			document.write(new Date().getFullYear());
		</script> Craig Ryan, s3555490.</div>
		<div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
		<div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
   
    </div>
  </body>
</html>
