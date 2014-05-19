<?php

require_once 'translate.php';

function head($product_name, $title = '', $tab = 1) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php print $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
<div id="app">

<div id="top">
<div id="title">
<?php print strtoupper($product_name); ?>
</div>

<div id="nav">
<a href="?func=from" class="tab-1"><?php print t('Reserve a Bikkes'); ?></a>
<a href="?func=reservations" class="tab-2"><?php print t('My Reservations'); ?></a>
</div>
</div>

<?php
}

function foot() {
?>
</div>
</body>
</html>
<?php	
}