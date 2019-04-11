<?php
session_start();
require "config.php";

if(isset($_SESSION['banco']) && empty($_SESSION['banco']) == false){

	if(isset($_POST['tipo'])){

		$tipo = $_POST['tipo'];
		$valor = str_replace("," ,"",$_POST['valor']); //trocando toda virgula por nada com a funcao str_replace;
		$valor = floatval($valor);

		$sql = $pdo->prepare("INSERT INTO historico(id_conta,tipo,valor,data_operacao) VALUES (?,?,?,NOW() ) ");
		$sql->bindValue(1,$_SESSION['banco']);
		$sql->bindValue(2,$tipo);
		$sql->bindValue(3,$valor);
		$sql->execute();

		if ($tipo == '0') {
			//depósito
			$sql = $pdo->prepare("UPDATE contas SET saldo = saldo + ? WHERE id = ?");
			$sql->bindValue(1,$valor);
			$sql->bindValue(2,$_SESSION['banco']);
			$sql->execute();
		}else{
			//saque
			$sql = $pdo->prepare("UPDATE contas SET saldo = saldo - ? WHERE id = ?");
			$sql->bindValue(1,$valor);
			$sql->bindValue(2,$_SESSION['banco']);
			$sql->execute();
		}
		header("Location:../add-transacao.php");
		exit;
	}else{
		header("Location:../add-transacao.php");
		exit;
	}

}else{
	header("Location:login.php");
	exit;
}

?>