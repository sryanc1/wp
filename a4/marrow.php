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
<?php
	midModule();
?>
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
