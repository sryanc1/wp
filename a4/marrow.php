<?php
	session_start();
	include_once("tools.php");
	topModule();
?>
	<body>	
		<article class="div1" style="background: rgba(40,40,40,0.1)">
			<header>
				<h1 style="text-align: center">FMC Haematology Cell Counter</h1>
			</header>
		<input id="type" value="marrow" hidden>
			<main id="counter">
				<div class="group">
					<div id="cellTotal" class="inGroup" style="width: 400px;">
					Total white cell count: - Please enter the total white cell count.
						<input class="div2" type="Number" style="width: 127px;">
					</div>
					<br>	
					
					<div class="inGroup">
					Number of cells to count: - Please enter the number of cells to count.<br>
						<input class="div2" id="numToCount" value="400" type="number">
					</div>					
					
			
				</div>
				<div class="group">
				
					<div class="inGroup">
					Total diff count: <br>
						<input class="div2" id="diffTotal" value="0" readonly>
					</div>
									
					<div class="inGroup">
					Blasts = A <br>
						<input class="div2" id="a" value="0" readonly>
					</div>
					
					<div class="inGroup">
					Promyelocytes = S <br>
						<input class="div2" id="s" value="0" readonly>
					</div>
					
					<div class="inGroup">
					Myelocytes = D <br>
						<input class="div2" id="d" value="0" readonly>
					</div>
					
					<div class="inGroup">
					Meta myelocytes = F <br>
						<input class="div2" id="f" value="0" readonly>	
					</div>	
					
					<div class="inGroup">
					Neutrophils = G <br>
						<input class="div2" id="g" value="0" readonly>	
					</div>
				</div>
				<div class="group">
					<div class="inGroup">
					Lymphoblasts = Z <br>
						<input class="div2" id="z" value="0" readonly>	
					</div>

					<div class="inGroup">
					Lymphocytes = X <br>
						<input class="div2" id="x" value="0" readonly>	
					</div>										

					<div class="inGroup">
					Plasma cells = C <br>
						<input class="div2" id="c" value="0" readonly>
					</div>

					<div class="inGroup">
					Monocytes = V <br>
						<input class="div2" id="v" value="0" readonly>	
					</div>

					<div class="inGroup">
					Eblast = B <br>
						<input class="div2" id="b" value="0" readonly>	
					</div>

					<div class="inGroup">
					Other = N <br>
						<input class="div2" id="n" value="0" readonly>	
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
					<div class="inGroup">
						<form method="get" action="marrow.php">
							<button class="button3" type="submit"> Reset </button>
						</form>
					</div>
				</div>
			</main>		
<?php
	endModule()
?>
