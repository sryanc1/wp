<?php
	session_start();
	require_once("tools.php");
	topModule("Shopping cart page");
	
	
	//"Empty cart" and "purchase buttoms" on this page submit here - check post array then proceed
	if ($_POST['empty'] == "Empty cart") {
		unset($_SESSION['cart']);
	} else if ($_POST['purchase'] == "Purchase items") {
		header("Location: checkout.php");
	} 
	
	//Check the session cart array has items
	function shoppingCart() {
		if (!empty($_SESSION['cart'])) {
			$lineArray = [];
			$cartArray = [];
			$costTotal = 0.00;

			//For each item - read the info from the original file to ensure its correct
			foreach ($_SESSION['cart'] as $cell) {
				$id = $cell["ID"];
				$oid = $cell["OID"];
				$qty = $cell["qty"];
				if ($qty >= 1) {
					//Check which file the order originally came from - a bit of a hacky away of doing it
					if ($id[0] == "B") {
						$file = "Products/productsBag.txt";
					} else if ($id[0] == "N") {
						$file = "Products/productsNecklace.txt";
					}
					
					//Open the file and set item variables
					$myFile = fopen($file, "r") or die("Unable to open file!");
					flock($myFile, LOCK_SH);
					$lineHeading = fgetcsv($myFile, 0, "\t");
					while (!feof($myFile)) {
						$lineArray = fgetcsv($myFile, 0, "\t");
						//Check the product ID and Order ID exist in the same product line
						if (in_array($id, $lineArray) && in_array($oid, $lineArray)) {
							//Make the order line an associative array with the headings as keys
							$cellItem = array_combine($lineHeading, $lineArray);
							$id = $cellItem["ID"]; 
							$oid = $cellItem["OID"];
							$title = $cellItem["Title"];
							$description = $cellItem["Description"];
							$option = $cellItem["Option"];
							$price = $cellItem["Price"];
							$resources = $cellItem["Resources"];
							$costTotal = $costTotal + ($cellItem["Price"] * $qty);
							
							//Display order items
							$list = <<<"CARTLIST"
							<div class="cartDiv">
								<img class="img5" src=$resources alt=$title>
								<p> $title</p>
								<span> Item price: $$price </span><br><span> Number of items ordered is: $qty</span>
								<br><span> Product ID: $id </span><br><span> Option: $option</span> 
							</div>

CARTLIST;

							echo $list;					
						}
					}
				}
				flock($myFile, LOCK_UN);
				fclose($myFile);
			}	
		} else {
			$costTotal = 0.00;
			echo "<p>Nothing in your shopping cart yet</p>";
		}
		
		//Calculate the order price and display buttons for "Purchase" and "Empty cart"
		$endCart = <<<"ENDCART"
		<div>
			<form method="post" action="shoppingCart.php">
				<span><input class="form cartButtons li" type="submit" name="empty" value="Empty cart" /></span>
				<span style="padding: 10px;" class="heading3 li">Cart total: $$costTotal.00</span>
				<span><input class="form cartButtons li" type="submit" name="purchase" value="Purchase items" /></span>
			</form>
		</div>
		
ENDCART;

		echo $endCart;		
	}

	
?>

	<article class="div1"> 
		<p class="heading3">Your shopping cart items.</p>
		<?php
			shoppingCart();
		?>
	</article>
	
<?php
	endModule();
	error_reporting( E_ERROR | E_WARNING | E_PARSE );
?>
