<?php session_start(); ?>
<?php

if(!empty($_POST['lang'])) {
	session_destroy();
	session_start();
	$_SESSION['lang'] = $_POST['lang'];
	die('DONE! <a href="index.php">proto</a>');
}
?>

<html>
<form method="post" action="control.php">
<h1>Bikkes CTRL</h1>
Lang: <select name="lang">
<option>fi</option>
<option>en</option>
</select>
<input type="submit" value="Reset">
</form>
</html>