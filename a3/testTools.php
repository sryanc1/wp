
<?php
	function endModule() {
		$output = <<<"FOOTER"
		
		<footer class="footer">
			<script src='JavaScript/myHelper.js'></script>
			<div>&copy;<script>
				document.write(new Date().getFullYear());
			</script> Craig Ryan, s3555490.</div>
			<div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
			<div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
		</footer>
FOOTER;
	echo $output;
	}
?>


<?php
/*Function to display all products on one page
 - this function reads from a .txt file and outputs to HTML 
 Addoped from w3 schools example and pumps.php example. 
*/

	function productList() {
		
		$myFile = fopen("products.txt", "r") or die("Unable to open file!"); //Open the text file
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
			<div class="productDiv" >
				<img id="$oid" class="img4" src="$resources" alt="$title">$title			
			</div>
		
PRODUCTLIST;

	echo $list;
		}
	} 
?>


