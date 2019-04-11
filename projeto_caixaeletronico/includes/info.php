<?php
require 'config.php';
if(isset($_SESSION['banco']) && empty($_SESSION['banco']) == false){
	$id = $_SESSION['banco']; // pega o id session da pagina autenticaLogin.php

	$sql = $pdo->prepare("SELECT * FROM contas WHERE id = ?");
	$sql->bindValue(1,$id);
	$sql->execute();

	if ($sql->rowCount() > 0) {
		$info = $sql->fetch();
	}else{
		header("Location:login.php");
	exit;
	}

}else{
	header("Location:login.php");
	exit;
}
?>
