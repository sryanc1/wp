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
		<h1 class="heading2">Treat yourself and your littlest one today!</h1>
		<p><img class="img2" src="../../media/rosie3.png" alt="Picutre of a young child with a butterfly costume">Each item is made in the cottage industry style. 
		With more years of quilting experience than I care to admit and looking for other challenging endeavors, I’ve turned my skills to fashion. 
		Each accessory is the culmination of many hours pattern matching, experimentation, colour choice, cutting, sewing, ironing… you get the idea.
		</p> 
		<p>Most of my works are made to order, and these are just some examples. 
		My children are the inspiration for the majority of my creations. 
		These range from kids clothes to nappy bags and pram liners, handbags with a little extra room, mummy necklaces, and a multitude of other accessories. 
		Like I said, most of my orders are custom made so if you fancy a fabric or need something special, just let me know!
		</p> 
		<p>A feature product of mine are the "Mummy Necklaces". 
		They are made from food grade silicon and are designed specificaly for bubs to chew on! 
		First and formost they'er a stylish fashion statment, with their bright colours and pretty patterns. 
		If however you're out and about with a bub thats teething they can come in really handy.
		And lets face it ladies, bub are always pulling at things around our necks when being carried or at feeding time. 
		With this in mind I've also designed them with a quick release toggle. 
		</p>	  
	</article>
	
	<!-- This section is used to display the latest designs. 
	It should resize depending on the browser window and drop to the bottom on smaller devices
	- should resize to accomidate mobile devices but is currently not happening? -->
    <section class="div1">
		<p class="heading3">Latest Designs</p>
		<div class="flexDiv">
			
			<div class="productDiv">
				<a href="product.php">
					<img class="img3" src="../../media/bag1.jpg" alt="Handbag">
					<p>Handbags / Nappybags<p>	
				</a>
			</div>
			
			<div class="productDiv">
				<a href="product.php">
					<img class="img3" src="../../media/necklace2.jpg" alt="Mummy necklace">
					<p>Mummy Necklaces</p>
				</a>
			</div>
			
			<div class="productDiv">
				<a href="product.php">
					<img class="img3" src="../../media/earings1.jpg" alt="painted striped earrings">
					<p>Earrings</p>
				</a>
			</div>
			
			<div class="productDiv">
				<a href="product.php">
					<img class="img3" src="../../media/bracelet1.jpg" alt="A range of beaded bracelets">
					<p>Bracelets</p>
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

