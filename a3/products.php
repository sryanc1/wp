<?php
	session_start();
	include_once("tools.php"); // contains modules and functions
	
	topModule("All products page");
?>
	   
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
        
<?php
	endModule();
?>

