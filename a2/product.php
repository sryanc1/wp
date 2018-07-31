<!DOCTYPE html>
<html lang='en'>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
			<legend class="heading2">Treat yourself</legend>
			<a target="_blank" href="../../media/bag1.jpg">
				<img class="productDiv fullProductImg" src="../../media/bag1.jpg" alt="Handbag">
			</a>
			<p>This handbag can also double as a nappy bag and is feature packed with internal pockets designed to accomidate a <srtong>mobile phone, clutch purse, baby wipes and bottle.</srtong></p>
			<p>The fabric is from my favourite Tula Pink collection.</p>
	
		<form method="post" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php"> 
			<input name="id" type="hidden" value="001"/>
			
			<p id="price">Price: $100.00 for mums and $50.00 for bubs sized bags</p>
			
			<p>Size: <br>
			<select id="size" onchange="calculatePrice()" name="option" class="form" required >
				<option value="" selected>Please Select</option>
				<option value="large" >For mums</option>
				<option value="small">For bubs</option>
			</select>
			</p>
			
			<p>Quantity: <br>
			<input id="qty" oninput="calculatePrice()" class="form" name="qty" type="number" value="" min="1" placeholder="0" required />
			<span class="button" id="incrementQty">+</span>
			<span class="button" id="decrementQty">-</span>
			</p>
			
			<p><input class="button form" type="submit" value="Buy" /></p>
			
		</form>
		</fieldset>
	</article>
    
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
