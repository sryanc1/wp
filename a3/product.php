<?php
	session_start();
	require_once("tools.php");
	
	topModule("Detailed product page");
?>
    
	<article class="main">  
		<fieldset>
			<legend class="heading2">Treat yourself</legend>
			<a target="_blank" href="../../media/bag1.jpg">
				<img class="productDiv fullProductImg" src="../../media/bag1.jpg" alt="Handbag">
			</a>
			<p>This handbag can also double as a nappy bag and is feature packed with internal pockets designed 
			to accomidate a <strong>mobile phone, clutch purse, baby wipes and bottle.</strong></p>
			<p>The fabric is from my favourite Tula Pink collection.</p>
	
		<form method="post" action="processing.php"> 
			<input name="id" type="hidden" value="001"/>
			
			<p>Price: $100.00 for mums and $50.00 for bubs sized bags</p>
			
			<p>Size: <br>
			<select id="size" onchange="calculatePrice()" name="option" class="buttom form" required >
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
			
			<div id="price" class="form">Total price:</div>
			
			<p><input class="button form" type="submit" value="Buy" /></p>
			
		</form>
		</fieldset>
	</article>
    
<?php
	endModule();
	error_reporting( E_ERROR | E_WARNING | E_PARSE );

?>

