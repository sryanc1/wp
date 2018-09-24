<?php
	include_once("tools.php");
	topModule();
?>	
	<body>	
		<article class="div1">
			<header>
				<h1 style="text-align: center">FMC Heamatology Cell Counter</h1>
			</header>
	<main>
		<form class="indexButtonDiv1" method="get" action="blood.php">
			<input class="button1" type="submit" value="Blood Counter">
		</form>
			
		<form class="indexButtonDiv2" method="get" action="marrow.php">
			<input class="button2" type="submit" value="Marrow Counter">
		</form>
	</main>
<?php
	endModule()
?>
