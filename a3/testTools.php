
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
			echo "$lineArray[0]\n";
			//For each of these values - assign a key from the "heading line" to the value.
			foreach ($lineArray as $key => $value) {
				echo "Key: $key and Value: $value \n";
				//As each new line is also an array - assign a key to the array (in this case index zero). 
				//
				$productArray[ $lineArray[0]] [$lineHeading[$key]]  = $lineArray[$key];
			}	
		}	
		print_r($productArray);
		$length1 = count($productArray); //5
		$length2 = count($lineArray); //1
		$length3 = count($lineHeading); //7
		print_r($length1);
		print_r($length2);
		print_r($length3);
		echo $productArray['003']['ID'];
		flock($myFile, LOCK_UN);
		fclose($myFile);		
				
	} 
?>


