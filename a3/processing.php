<?php
if (!empty($_GET)) {
	echo "<h3> $_GET contains:</h3>";
	echo "var_dump($_GET)";
}
?>

<h3>$_POST contains:</h3>
<pre><?php print_r($_POST); ?></pre>

<h3>$_COOKIE contains:</h3>
<pre><?php print_r($_COOKIE); ?></pre>

<h3>$_REQUEST contains:</h3>
<pre><?php print_r($_REQUEST); ?></pre>
