<?php

session_start();

$product_name = 'BIKKES';

require_once 'tpl.php';

head($product_name);

$file = 'includes/' . basename($_GET['func']) . '.php';
if(!file_exists($file)) {
	$file = 'includes/index.php';
}

include($file);

foot();