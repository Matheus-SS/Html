<?php
session_start();
require 'config.php';

if (isset($_POST['agencia']) && empty($_POST['agencia']) == false) {
	
	$agencia = addslashes($_POST['agencia']);
	$conta = addslashes($_POST['conta']);
	$senha = addslashes(md5($_POST['senha']));

	$sql = $pdo->prepare("SELECT * FROM contas WHERE agencia = ? AND conta = ? AND senha = ?");
	$sql->bindValue(1,$agencia);
	$sql->bindValue(2,$conta);
	$sql->bindValue(3,$senha);

	$sql->execute();

	if($sql->rowCount() > 0){
		$sql = $sql->fetch();

		$_SESSION['banco'] = $sql['id'];
		header("Location:../index.php");
		exit;
	}else{
		header("Location:../login.php");
		
		exit;
	}
}else{
	echo "erro";
		header("Location:../login.php");
		exit;
	}

?>