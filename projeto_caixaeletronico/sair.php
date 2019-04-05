<?php
session_start();

if (isset($_SESSION['banco'])) {
	unset($_SESSION['banco']);
	header("Location:login.php");
	exit;
}

?>