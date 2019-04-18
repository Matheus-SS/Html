<?php
session_start();
require "config.php";

if(isset($_SESSION['banco']) && empty($_SESSION['banco']) == false){
 
	if(isset($_POST['tipo'])){
		 date_default_timezone_set('America/Sao_Paulo');// formatar para o servidor ser BR
		$tipo = $_POST['tipo'];
		$valor = str_replace("," ,"",$_POST['valor']); //trocando toda virgula por nada com a funcao str_replace;
		$valor = floatval($valor);
		$data =  date('Y-m-d H:i:s'); // formatar tipo date para string
		$sql = $pdo->prepare("INSERT INTO historico(id_conta,tipo,valor,data_operacao) VALUES (?,?,?,?)");
		$sql->bindValue(1,$_SESSION['banco']);
		$sql->bindValue(2,$tipo);
		$sql->bindValue(3,$valor);
		$sql->bindValue(4,$data);

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