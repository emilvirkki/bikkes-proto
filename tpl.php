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
<a href="index.php"><?php print strtoupper($product_name); ?></a>
</div>

<div id="nav">
<a href="?func=reserve" class="tab-1"><?php print t('Reserve a Bikkes'); ?></a>
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

function show_part($part, $message) {
	$loc = htmlspecialchars($_SESSION['reservation'][$part . '_loc']);
	$timestamp = strtotime($_SESSION['reservation'][$part . '_time']);
	$date = date('d.m.Y', $timestamp);
	$time = date('H:i', $timestamp);

	print t($message, array(
		'@location' => $loc,
		'@date' => $date,
		'@time' => $time
	));
}

function show_reservation($show_from = TRUE) {
?>
<div class="reservation-info">
	<?php if($show_from): ?>
		<p><?php show_part('from', 'Get the bike from <a href="#">@location</a> on <strong>@date</strong> at <strong>@time</strong>.'); ?></p>
	<?php endif; ?>
	<p><?php show_part('to', 'Return it to <a href="#">@location</a> on <strong>@date</strong> at <strong>@time</strong>.'); ?></p>
	
</div>
<?php
}