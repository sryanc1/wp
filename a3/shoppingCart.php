<?php
	session_start();
	require_once("tools.php");
	topModule("Shopping cart page");
	
	
	function shoppingCart() {
		if (isset($_POST['ID'], $_POST['qty'], $_POST['OID'])) {
			$id = $_POST['ID'];
			$oid = $_POST['OID'];
			$_SESSION['cart'][$id.$oid] = $_POST;
			$lineArray = [];
			$cartArray = [];
			foreach ($_SESSION['cart'] as $cell) {
				$id = $cell["ID"];
				$oid = $cell["OID"];

				if ($id[0] == B) {
					$file = "Products/productsBag.txt";
				} else if ($id[0] == N) {
					$file = "Products/productsNecklace.txt";
				}

				$myFile = fopen($file, "r") or die("Unable to open file!");
				flock($myFile, LOCK_SH);
				$lineHeading = fgetcsv($myFile, 0, "\t");
				while (!feof($myFile)) {
					$lineArray = fgetcsv($myFile, 0, "\t");
					if (in_array($id, $lineArray) && in_array($oid, $lineArray)) {
						$cellItem = array_combine($lineHeading, $lineArray);
						$id = $cellItem["ID"]; 
						$oid = $cellItem["OID"];
						$title = $cellItem["Title"];
						$description = $cellItem["Description"];
						$option = $cellItem["Option"];
						$price = $cellItem["Price"];
						$resources = $cellItem["Resources"];
						
						$list = <<<"CARTLIST"
						<div class="cartDiv">
							<img class="img5" src=$resources alt=$title>
							<p>$title</p>
							<p>$$price</p>
							<p>$id</p>
						</div>

CARTLIST;

						echo $list;					
					}
				}

				flock($myFile, LOCK_UN);
				fclose($myFile);
			}
			
		} else {
			echo "<p>Nothing in your shopping cart yet</p>";
		}	
	}
	//session_destroy();
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
