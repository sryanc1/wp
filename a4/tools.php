<?php

//Header top module - same on all pages
	function topModule() {
		$output = <<<"HEADER"

<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>White cell differential counter</title>
		<link id="stylecss" type="text/css" rel="stylesheet" href="style.css">
	</head>			

		
HEADER;
	echo $output;
	}
	
	
	
//Counter for the mid module - 
	function midModule() {
		$output = <<<"MID"
		
			<main id="counter">
				<div class="group">
					<div id="cellTotal" class="inGroup" style="width: 400px;">
					Total white cell count: - Please enter the total white cell count.
						<input class="div2" type="Number" style="width: 127px;">
					</div>
					<br>	
					
					<div class="inGroup">
					Number of cells to count: - Please enter the number of cells to count.<br>
						<input class="div2" id="numToCount" value="100" type="number">
					</div>					
					
			
				</div>
				<div class="group">
				
					<div class="inGroup">
					Total diff count: <br>
						<input class="div2" id="diffTotal" value="0" readonly>
					</div>
									
					<div class="inGroup">
					Blasts = D <br>
						<input class="div2" id="d" value="0" readonly>
					</div>
					
					<div class="inGroup">
					Promyelocytes = F <br>
						<input class="div2" id="f" value="0" readonly>
					</div>
					
					<div class="inGroup">
					Myelocytes = G <br>
						<input class="div2" id="g" value="0" readonly>
					</div>
					
					<div class="inGroup">
					Meta myelocytes = H <br>
						<input class="div2" id="h" value="0" readonly>	
					</div>	
				</div>
				<div class="group">
					<div class="inGroup">
					Basophils = Z <br>
						<input class="div2" id="z" value="0" readonly>	
					</div>

					<div class="inGroup">
					Eosinophils = X <br>
						<input class="div2" id="x" value="0" readonly>	
					</div>										

					<div class="inGroup">
					Monocytes = C <br>
						<input class="div2" id="c" value="0" readonly>
					</div>

					<div class="inGroup">
					Lymphocytes = V <br>
						<input class="div2" id="v" value="0" readonly>	
					</div>

					<div class="inGroup">
					Neutrophils = B <br>
						<input class="div2" id="b" value="0" readonly>	
					</div>

					<div class="inGroup">
					Bands = N <br>
						<input class="div2" id="n" value="0" readonly>	
					</div>

					<div class="inGroup">
					NRBCs = M <br>
						<input class="div2" id="m" value="0" readonly>	
					</div>
					
					<div class="inGroup">
						<input id="cellsCounted" value="" readonly hidden>
					</div>
				</div>
				<div class="group" style="margin: auto; width: 47.5%;">
					<div class="inGroup">
						<form method="get" action="index.php">
							<button class="button3" type="submit"> < Back </button> 
						</form>
					</div>
					<div class="inGroup">
						<input id="percentageButton" class="button3" value="Calc Percent" style="text-align: center" readonly>
					</div>
					<div class="inGroup">
						<input id="rewindButton" class="button3" value="Rewind Count" style="text-align: center" readonly> 
					</div>
	
MID;
	echo $output;
	}


//Footer end module - same on all pages		
	function endModule() {
		$output = <<<"END"
		
			<details closed>
				<p>The motivation for this web application was to provide a platform for off-line differentials such as those for RCPA and training slides.</p>
				<div>This web app contains the following features<\div>
					<ul>
						<li>Blood film and marrow cell counter options</li>
						<li>User defined total numbers of cells to count</li>
						<li>Cells highlighting to keep track of cells counted</li>
						<li>A 1 cell at a time rewind function</li>
						<li>Percentage calculations</li>
						<li>Consistent cell naming with current applications</li>
						<li>A count reset function</li>
						<li>For best results, please use a Chrome Web Browser</li>
					</ul>
				<p>If you encounter any issues using this application please notify me as soon as possible (craig.ryan@sa.gov.au)<\p>
				
			<footer class="footer">
				<script src='myHelper.js'></script>
				<div>&copy;
				<script>document.write(new Date().getFullYear());</script>
				Craig Ryan. version 2.1
				</div>
				<div>Disclaimer: This website is not an official SA Health website and results should be interpreted with caution if used for patient differentials</div>
			</footer>
			</details>			
		</article>
	</body>
</html>
END;
	echo $output;
	}
?>
