<?php
	session_start();
	include_once("tools.php"); // contains modules and functions
	topModule("All products page");
	
	//Products page summits to self - add selected item to the session cart array
	if (isset($_POST['ID'], $_POST['qty'], $_POST['OID'])) {
		$id = $_POST['ID'];
		$oid = $_POST['OID'];
		//Concatinate product ID and OrderID to form a unique cart ID
		$_SESSION['cart'][$id.$oid] = $_POST;
	}
	
		
/* Function to display all products on one page
 * Addoped from w3 schools example and pumps.php example. 
 * 
 * First - read in a file and create an array (2D table)
 * Next - give the table usable indexing
 * Then - use this to build the page
*/		
	function productList($file) {	
		$myFile = fopen($file, "r") or die("Unable to open file!"); //Open the text file
		flock($myFile, LOCK_SH);
		$productArray=[]; //A 2D array of products (a table)
		$lineHeading=[]; //First line / haeding of the table file
		$lineArray=[]; //Contents of the table
		//Get the required heading details - these will become the keys of the array.
		$lineHeading = fgetcsv($myFile, 0, "\t"); //fgetcsv() returns a 1D indexed array of values.
		//Loop through until the end of the file.
		while (!feof($myFile)) {
			//Read each line of the file - fgetcsv() returns a 1D array of values.
			$lineArray = fgetcsv($myFile, 0, "\t");
			if (!empty($lineArray)){ //fgetcsv returns an empty array at the end of the file.
				//For each of these values - assign a key from the "heading line" to the value.
				for ($cell=0; $cell<count($lineArray); $cell++) {
					$productArray[$lineArray[0]][$lineHeading[$cell]] = $lineArray[$cell];
				}
			}	
		}
		//echo '<pre>',print_r($productArray),'</pre>';
		//print_r(count($productArray));	
		flock($myFile, LOCK_UN);
		fclose($myFile);

		//Check to see if a valid product has been selected
		if ( empty($_GET['ID']) || !isset( $productArray[$_GET['ID']])) {
			//Get all the info from the array table and set them as variables if no product is selected 
			//This is overly verbose, but it helps me understand whats going on.
			foreach ($productArray as $cellItem) {	
				$id = $cellItem["ID"]; 
				$oid = $cellItem["OID"];
				$title = $cellItem["Title"];
				$description = $cellItem["Description"];
				$option = $cellItem["Option"];
				$price = $cellItem["Price"];
				$short = $cellItem["Short Description "];
				$resources = $cellItem["Resources"];
				
				//For each row of variables, insert them in the HTML
				$list = <<<"PRODUCTLIST"
				<article class="formDiv">
					<form method="get" action="products.php">
						<input name="ID" type="hidden" value="$id">
						<button  class="formButton" type="submit"> 
							<img class="productDiv img4" src="$resources" alt="$title" >
							<p>
								$title <br> $short <br>Price: $$price
							</p>
						</button>
					</form>
				</article>
			
PRODUCTLIST;
				echo $list; //echo out the HTML to make the web page
			}
		}
		else { 	//If there is an item in the get array 
			foreach ($productArray as $cellItem) {	
				$id = $cellItem["ID"];
				$oid = $cellItem["OID"];
				$title = $cellItem["Title"];
				$description = $cellItem["Description"];
				$option = $cellItem["Option"];
				$price = $cellItem["Price"];
				$resources = $cellItem["Resources"];
				$smallPrice = ($cellItem["Price"] * 0.5);

				if ($_GET['ID'] == $id){ //Find a matching product ID
					 
			//and populate the order form with this products information		
			$form = <<<"FORM"
				<fieldset class="main">
					<legend class="heading2">Treat yourself</legend>
						<a target="_blank" href="$resources">
							<img class="productDiv fullProductImg" src="$resources" alt="$title">		
						</a>
						<p>$description</p>
						<input id="itemPrice" type="hidden" value=$price>
						
					<form method="post" action="products.php"> 
						<input name="ID" type="hidden" value=$id>
						<p>Price: $$price for the larger size and $$smallPrice.00 for smaller sized option</p>
						<p>Size: <br>
							<select id="size" onchange="calculatePrice()" name="OID" class="buttom form" required >
								<option value="" selected>Please Select</option>
								<option value="large" >Large</option>
								<option value="small">Small</option>
							</select>
						</p>
						<p>Quantity: <br>
							<input id="qty" oninput="calculatePrice()" class="form" name="qty" type="number" value="" min="1" placeholder="0" required />
							<span class="button" id="incrementQty">+</span>
							<span class="button" id="decrementQty">-</span>
						</p>
						<div id="price" class="form">Total price:</div>
						<p>
							<input class='button form' type='submit' value='Add to cart'>
						</p>		
					</form>		
				</fieldset>
FORM;
			echo $form;
				
				}
			}
		}			
	} 


//Now - populate with HTML	
?>
	   
	<section class="div1">
		
		<div>
			<p class="heading3">Handbags and Nappy bags</p>
		</div>
		<div class="flexDiv">	
			<?php
			/* Pass in a file dedicated to this product line - Bags
			 * Client requested - easier to manage product lines
			 * Future developments will seperate these into different pages
			*/
			productList("Products/productsBag.txt");
			?>												
		</div>
		
			
		<div>
			<p class="heading3">Necklaces and Mummy Necklaces</p>
		</div>
		<div class="flexDiv">	
			<?php
			//Pass in a file dedicated to a product line - Necklaces
			productList("Products/productsNecklace.txt");
			?>
		</div>
<?php
/*--------------To be used in the future---------------
		<div>
			<p class="heading3">Earrings</p>
		</div>
		<div class="flexDiv">			
			<?php
			//Pass in a file dedicated to a product line - Earrings
			productList("Products/productsBag.txt");
			?>			
		</div>
			
			
		<div>
			<p class="heading3">Bracelets</p>
		</div>
		<div class="flexDiv">			
			<?php
			//Pass in a file dedicated to a product line - Bracelets
			productList("Products/productsBag.txt");
			?>			
		</div>	
	</section>
*/
?>
<?php
	endModule();
	error_reporting( E_ERROR | E_WARNING | E_PARSE );

?>

