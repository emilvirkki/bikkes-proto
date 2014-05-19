<?php
session_start();
$_SESSION['reservation'] = $_GET;
header('Location: index.php?func=reservation2');