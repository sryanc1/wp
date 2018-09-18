<?php
	session_start();
	include_once("tools.php"); // contains modules and functions
	topModule("Checkout page");
	
	//Set form variables as empty fields
	$error = ""; //The error variable is used after the form has been subbmited 
	$fname = "";
	$lname = "";
	$email = "";
	$address = "";
	$mobNum = "04";
	$ccNum = "";
	$ccExp = "";
	
	//Indexed array counter 
	$x = 0;
	
	//Set the form fields into an index array - (probably dont need to declare the array here AND the one below)
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
				
?>

	<article class="main">  
		<fieldset>
			<legend class="heading2">Register / Checkout details</legend>
			<form method="post" action="checkout.php" id="checkout">
				<?php 	
						//Check to see if the form has been subbmitted
						if (empty($_POST)) {
							//If the form has not been subbmitted - step through the form fields and display each one from the array above
							foreach ($formArray as $item) {
								echo $item;
							}
						} else {
							//If the form has been submitted - check each Post array item (form field) is valid
							foreach ($_POST as $arrayItem){
								//If the form field is blank - set the error message
								if (empty($arrayItem)) {
									$error = "Cannot be blank";
								//Check for a valid email address - and set the error message
								} else if (($arrayItem == $_POST["email"]) && (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))) {
									$cleanEmail = filter_var($arrayItem, FILTER_SANITIZE_EMAIL);
									$error = "Email address error - did you mean: $cleanEmail ?";
								//More validation code to be added
								}
								//Clean and set the form fields to the values entered by the user - so they dont have to enter it again
								//Note - every form field has the variable "name" - so every form field will be updated with this data, but only the current (appropriate) line is updated / echoed
								$name = htmlentities(trim($arrayItem));
								//Set the form array again (I should be able to call it again from above but not sure how)
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
								//Echo the form field from the indexed array
								echo $formArray[$x];
								//Reset the error variabl
								$error = "";
								//Inrement the index counter
								$x++;
							}
							//Echo the last form field - the submit button
							echo $formArray[7];
							//Reset the index to zero 
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
