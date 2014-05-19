<?php session_start(); ?>
<?php

if(!empty($_POST['lang'])) {
	session_destroy();
	session_start();
	$_SESSION['lang'] = $_POST['lang'];
	die('DONE! <a href="index.php">proto</a>');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<form method="post" action="control.php">
<h1>Bikkes CTRL</h1>
Lang: <select name="lang">
<option>fi</option>
<option>en</option>
</select>
<input type="submit" value="Reset">
</form>
</body>
</html>