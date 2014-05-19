<?php
session_start();
$_SESSION['state'] = $_GET['state'];
header('Location: index.php?func=reservations');