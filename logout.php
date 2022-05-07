<?php
session_start();
require 'config/config.php';
if (!isset($_SESSION['S_no'])) {
	header('location: login.php');
}
else {
	// $user_no = $_SESSION['S_no'];
	session_destroy();
	header("Location: login.php");
}
?>