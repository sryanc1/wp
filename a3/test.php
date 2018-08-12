<?php
session_start();
include_once("testTools.php");
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset="utf-8">
		
	</head>
		<body>
			<h1>heading</h1>
			<?php
			productList();
			endModule();
			?>
		</body>
</html>
