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
			<div class="productDiv" >
				<img id="product1" class="img4" src="../../media/bag1.jpg" alt="Handbag">			
			</div>
			
			<div class="productDiv">
				<img class="img4" src="../../media/bag1.jpg" alt="Handbag">			
			</div>
			
			<div class="productDiv">
				<img class="img4" src="../../media/bag1.jpg" alt="Handbag">			
			</div>
			
			<div class="productDiv">
				<img class="img4" src="../../media/bag1.jpg" alt="Handbag">			
			</div>										
		</div>

			<div class="hiddenDiv" id="hiddenDiv">
			<a target="_blank" href="../../media/bag1.jpg">
			<img class="productDiv fullProductImg" src="../../media/bag1.jpg" alt="Handbag">		
			</a>
			<p>This handbag can also double as a nappy bag and is feature packed with internal pockets designed 
			to accomidate a <strong>mobile phone, clutch purse, baby wipes and bottle.</strong></p>
			<p>The fabric is from my favourite Tula Pink collection.</p>
			</div>
	
		<div>
			<p class="heading3">Necklaces</p>
		</div>
		
		<div class="flexDiv">		
			<div class="productDiv">
				<img class="img4" src="../../media/necklace2.jpg" alt="Mummy necklace">				
			</div>		
		</div>
			
		<div>
			<p class="heading3">Earrings</p>
		</div>
		<div class="flexDiv">
			<div class="productDiv">
				<img class="img4" src="../../media/earings1.jpg" alt="painted striped earrings">				
			</div>
		</div>
			
		<div>
			<p class="heading3">Bracelets</p>
		</div>
		<div class="flexDiv">
			<div class="productDiv">
				<img class="img4" src="../../media/bracelet1.jpg" alt="A range of beaded bracelets">
			</div>
		</div>
		
	</section>
        
<?php
	endModule();
	error_reporting( E_ERROR | E_WARNING | E_PARSE );

?>

