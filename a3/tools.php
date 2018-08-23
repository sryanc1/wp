<?php
	function topModule($pageTitle) {
		$output = <<<"HEADER"
		
<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>$pageTitle</title>
		<link rel="Posie Icon" href="../../media/favicon.ico" type="image/x-icon">
		<!-- Keep wireframe.css for debugging, add your css to style.css -->
		<link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
		<link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
		<script src='../wireframe.js'></script>
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Playfair+Display" rel="stylesheet">
		<!-- All immages used are property of "Posie and Me" and are not for reuse -->
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
					<li><a href="shoppingCart.php">Shopping Cart</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>  
			</nav>
HEADER;
	echo $output;
	
//Function to style the "current" link 
	function styleCurrentNavLink( $css ) {
		$here = $_SERVER['SCRIPT_NAME']; 
		$bits = explode('/',$here); 
		$filename = $bits[count($bits)-1]; 
		echo "<style>nav a[href$='$filename'] { $css }</style>";
	}
	styleCurrentNavLink('background-color: black;');

	}
	
	function endModule() {
		$output = <<<"FOOTER"
		
		<footer class="footer">
			<script src='JavaScript/myHelper.js'></script>
			<div>&copy;<script>
				document.write(new Date().getFullYear());
			</script> Craig Ryan, s3555490.</div>
			<div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
			<div>Maintain links to your <a href='Products'>products spreadsheet</a> and <a href='orders.txt'>orders spreadsheet</a> here. <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
		</footer>
    
		</div>
	</body>
</html>
FOOTER;
	echo $output;

//Debug module 	
	function preShow($arr, $retAsString=false) {
		echo "<pre>";
			print_r($arr,$retAsString);
		echo "</pre>";
	}
	$get = preShow($_GET,true);
	preShow($_POST);
	preShow($_SESSION);
	preShow($_GET);

	function printMyCode() {
		$lines = file($_SERVER['SCRIPT_FILENAME']);
		echo "<pre class='mycode'>\n";
		foreach ($lines as $lineNo => $lineOfCode)		
			printf("%3u: %1s \n", $lineNo, rtrim(htmlentities($lineOfCode)));
		echo "</pre>";
		}
	printMyCode();
	
	
}


/*Function to display all products on one page
 - this function reads from a .txt file and outputs to HTML 
 Addoped from w3 schools example and pumps.php example. 
	
	function productList($file) {	
		$myFile = fopen($file, "r") or die("Unable to open file!"); //Open the text file
		flock($myFile, LOCK_SH);
		$productArray=[]; //A 2D array of products (a table)
		$lineHeading=[]; //First line / haeding of the table file
		$lineArray=[]; //Contents of the table
		//Get the required heading details - these will become the keys of the array.
		$lineHeading = fgetcsv($myFile, 0, "\t"); //fgetcsv() - returns an array.
		//Loop through until the end of the file.
		while (!feof($myFile)) {
			//Read each line of the file - remember fgetcsv() returns a 1D array of values.
			$lineArray = fgetcsv($myFile, 0, "\t");
			//For each of these values - assign a key from the "heading line" to the value..
			for ($cell=1; $cell<count($lineArray); $cell++) {
				//Each new line is also an array - the for loop steps through this line array,
				//statring at one (not zero). The value of cell zero is reserved for the row key.
				$productArray[ $lineArray[0]] [$lineHeading[$cell]] = $lineArray[$cell];
			}	
		}	
		//print_r(count($productArray));
		echo '<pre>', print_r($productArray) ,'</pre>';
		flock($myFile, LOCK_UN);
		fclose($myFile);
		foreach ($productArray as $cellItem) {	
			$oid = $cellItem["OID"];
			$title = $cellItem["Title"];
			$description = $cellItem["Description"];
			$option = $cellItem["Option"];
			$price = $cellItem["Price"];
			$resources = $cellItem["Resources"];
			
			$list = <<<"PRODUCTLIST"
			<form method="get" action="products.php">
				<input name="id" type="hidden" value="$oid">
				<button class="productDiv" type="submit" onclick="expandDiv()"> 
					<img class="img4" src="$resources" alt="$title" >
					<p>
						$title $price
					</p>
				</button>
			</form>
			
PRODUCTLIST;
			echo $list;
		}
	} 
	

	function formBiulder($file) {
		$myFile = fopen($file, "r") or die("Unable to open file!"); //Open the text file
		flock($myFile, LOCK_SH);
		$productArray=[]; //A 2D array of products (a table)
		$lineHeading=[]; //First line / haeding of the table file
		$lineArray=[]; //Contents of the table
		//Get the required heading details - these will become the keys of the array.
		$lineHeading = fgetcsv($myFile, 0, "\t"); //fgetcsv() - returns an array.
		//Loop through until the end of the file.
		while (!feof($myFile)) {
			//Read each line of the file - remember fgetcsv() returns a 1D array of values.
			$lineArray = fgetcsv($myFile, 0, "\t");
			//For each of these values - assign a key from the "heading line" to the value..
			for ($cell=1; $cell<count($lineArray); $cell++) {
				//Each new line is also an array - the for loop steps through this line array,
				//statring at one (not zero). The value of cell zero is reserved for the row key.
				$productArray[ $lineArray[0]] [$lineHeading[$cell]] = $lineArray[$cell];
			}	
		}	
		//print_r(count($productArray));
		echo '<pre>', print_r($productArray) ,'</pre>';
		flock($myFile, LOCK_UN);
		fclose($myFile);
		foreach ($productArray as $cellItem) {	
			$oid = $cellItem["OID"];
			$title = $cellItem["Title"];
			$description = $cellItem["Description"];
			$option = $cellItem["Option"];
			$price = $cellItem["Price"];
			$resources = $cellItem["Resources"];
			
			$hiddenDiv = <<<"HIDDENDIV"
			<fieldset class="main">
				<legend class="heading2">Treat yourself</legend>
					<a target="_blank" href="$resources">
						<img class="productDiv fullProductImg" src="$resources" alt="$title">		
					</a>
					<p >$description</p>
			
				<form method="post" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php"> 
					<input name="id" type="hidden" value="001"/>
					<p>Price: $price for mums and $50.00 for bubs sized bags</p>
					<p>Size: <br>
						<select id="size" onchange="calculatePrice()" name="option" class="buttom form" required >
							<option value="" selected>Please Select</option>
							<option value="large" >For mums</option>
							<option value="small">For bubs</option>
						</select>
					</p>
					<p>Quantity: <br>
						<input id="qty" oninput="calculatePrice()" class="form" name="qty" type="number" value="" min="1" placeholder="0" required />
						<span class="button" id="incrementQty" onclick="calculatePrice($price)">+</span>
						<span class="button" id="decrementQty" onclick="calculatePrice($price)">-</span>
					</p>
					<div id="price" class="form">Total price:</div>
					<p>
						<input class="button form" type="submit" value="Add to cart" />
					</p>		
				</form>		
			</fieldset>
HIDDENDIV;
			echo $hiddenDiv;
		}
	}
*/		
?>


