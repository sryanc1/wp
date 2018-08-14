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
			
			<?php
			productList();
			?>		
													
		</div>
			<div class="hiddenDiv" id="hiddenDiv">
				<?php
				formBiulder();
				?>
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

