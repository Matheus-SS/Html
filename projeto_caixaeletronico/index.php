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
	<hr/>
	<h3>Movimentação/Extrato</h3>
	<a href="add-transacao.php"> Adicionar Transação</a>
	<table border="1" width="400px">
		<tr>
			<th>Data</th>
			<th>Valor</th>
		</tr>
		<?php
			$sql = $pdo->prepare("SELECT * FROM historico WHERE id_conta = ?");
			$sql->bindValue(1,$id);
			$sql->execute();

			if($sql->rowCount()>0){
				foreach ($sql->fetchAll() as $item) {
				?>
				<tr>
					<td><?php echo date('d/m/Y H:i',strtotime($item['data_operacao'])); ?></td>
					<td>
						<?php if($item['tipo'] == '0'):?>
							<font color="green">R$ <?php echo $item['valor'] ?> </font>
						<?php else:?>
							<font color="red">R$ -<?php echo $item['valor']; ?> </font>
						<?php endif; ?>
					</td>
				</tr>
				<?php
				}
			}
			?>

	</table>
</body>
</html>