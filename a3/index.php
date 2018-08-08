<?php
	session_start();
	include_once("tools.php"); // contains modules and functions

	// Any POST or GET Request Processing Code goes here

	topModule("Posie and Me - Home");
?>


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
	It should resize depending on the browser window and device -->
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

<?php
	endModule();
?>

