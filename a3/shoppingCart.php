<?php
	session_start();
	require_once("tools.php");
	topModule("Shopping cart page");
	
	$_SESSION['cart'] = array();
	if (isset($_POST['ID'], $_POST['qty'], $_POST['OID'])) {
		$_SESSION['cart'] = $_POST;
		print_r($_SESSION['cart']);
	} else {
		print_r("somthing not set");
	}
?>


<?php
	endModule();
	error_reporting( E_ERROR | E_WARNING | E_PARSE );
?>
