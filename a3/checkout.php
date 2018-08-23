<?php
	session_start();
	include_once("tools.php"); // contains modules and functions
	topModule("Checkout page");
	
	$error = "";
	$fname = "";
	$lname = "";
	$email = "";
	$address = "";
	$mobNum = "04";
	$ccNum = "";
	$ccExp = "";

	$x = 0;
	$formArray = array(
		"<p>First name: <br><input class='form' name='fname' type='text' placeholder='Firstname' value='$fname' required><span>$error</span></p>",
		"<p>Last name: <br><input class='form' name='lname' type='text' placeholder='Lastname' value='$lname' required><span>$error</span></p>",
		"<p>Email address: <br><input class='form' name='email' type='email' placeholder='email@example.com' value='$email' required /><span>$error</span></p>",
		"<p>Address: <br><textarea class='form' rows='4' name='address' form='checkout' 
		placeholder=
'Street number and name
Suburb
State and Postcode
Country' 
		value='$address' required></textarea><span>$error</span></p>",
		"<p>Mobile phone: <br><input class='form' name='mobNum' type='text'  value='$mobNum'><span>$error</span></p>",
		"<p>Credit card number: <br><input class='form' name='ccNum' type='password' value='$ccNum'><span>$error</span></p>",
		"<p>Cardit card expiry: <br><input class='form' name='ccExp' type='date' value='$ccExp' ><span>$error</span></p>",
		"<p><input class='form button' type='submit' value='Confirm purchase' /><span>$error</span></p>");
	

	//	if (!empty($_POST['fname'])) {
	//		$fname = htmlentities(trim($_POST['fname']));
	//		$_SESSION['user']['fname'] = $fname;
	//	} else if (empty($_POST['fname']) {
	//		$error = "This field cannot be blank";
	//	}
		
	//	if (!empty($_POST['sname'])) {
	//		$sname = htmlentities(trim($_POST['sname']));
	//		$_SESSION['user']['sname'] = $sname;
	//	}			
?>

	<article class="main">  
		<fieldset>
			<legend class="heading2">Register / Checkout details</legend>
			<form method="post" action="checkout.php" id="checkout">
				<?php 	
						if (empty($_POST)) {
							foreach ($formArray as $item) {
								echo $item;
							}
						} else {
							foreach ($_POST as $arrayItem){
								if (empty($arrayItem)) {
									$error = "Cannot be blank";
								} else if (($arrayItem == $_POST["email"]) && (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))) {
									$cleanEmail = filter_var($arrayItem, FILTER_SANITIZE_EMAIL);
									$error = "Email address error - did you mean: $cleanEmail ?";
								}
								$name = htmlentities(trim($arrayItem));
								
								$formArray = array(
								"<p>First name: <br><input class='form' name='fname' type='text' placeholder='Firstname' value='$name' required><span class='errorSpan' >$error</span></p>",
								"<p>Last name: <br><input class='form' name='lname' type='text' placeholder='Lastname' value='$name' required><span class='errorSpan' >$error</span></p>",
								"<p>Email address: <br><input class='form' name='email' type='text' placeholder='email@example.com' value='$name' required /><span class='errorSpan' >$error</span></p>",
								"<p>Address: <br><textarea class='form' rows='4' name='address' form='checkout' 
								placeholder=
'Street number and name
Suburb
State and Postcode
Country' 
								required>$name</textarea><span class='errorSpan' >$error</span></p>",
								"<p>Mobile phone: <br><input class='form' name='mobNum' type='text'  value='$name'><span class='errorSpan'>$error</span></p>",
								"<p>Credit card number: <br><input class='form' name='ccNum' type='password' value='$name'><span class='errorSpan'>$error</span></p>",
								"<p>Cardit card expiry: <br><input class='form' name='ccExp' type='date' value='$name' ><span class='errorSpan'>$error</span></p>",
								"<p><input class='form button' type='submit' value='Confirm purchase' /></p>");
								echo $formArray[$x];
								$error = "";
								$x++;
							}
							echo $formArray[7];
							$x = 0;
						}	 
				?>
			</form>
		</fieldset>
	</article>

<?php
	endModule();
	error_reporting( E_ERROR | E_WARNING | E_PARSE );

?>
