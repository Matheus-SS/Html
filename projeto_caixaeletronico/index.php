<?php
session_start();
require 'includes/config.php';
if(isset($_SESSION['banco']) && empty($_SESSION['banco']) == false){
	$id = $_SESSION['banco'];

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

<!DOCTYPE html>
<html>
<head>
	<title>Caixa Eletronico</title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="assets/css/style.css"/>
</head>

<body>
	<h1>Caixa XYZ</h1>
	Titular: <?php echo $info['titular'];?> <br/>
	Agencia: <?php echo $info['agencia'];?> <br/>
	Conta: <?php echo $info['conta'];?><br/>
	Saldo: <?php echo $info['saldo'];?><br/>
	<a href="sair.php">Sair</a>
</body>
</html>