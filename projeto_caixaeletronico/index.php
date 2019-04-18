<?php
session_start();
require 'includes/config.php';
include 'includes/info.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Caixa Eletronico</title>
	<?php include "includes/header.php"?>
</head>

<body>
<?php include "includes/sidebar.php"?>

<div class="content">

	<div class="btn-mob" id="btn-mob">
		<i class="fas fa-bars"></i>
	</div>

	<h3>Movimentação/Extrato</h3>
		<div class="btn-transacao" style="margin-left: 4px;">
			<a href="add-transacao.php"> Transação</a>
		</div>
	
	<div class="container" style="margin-top: 20px;">
		<div class="table-responsive"  style="border-radius:20px;">
			<table class="table table-bordered">
				<thead class="thead-light">
					<th>Data</th>
					<th>Valor</th>
				</thead>
				<tbody>
					<?php
						$sql = $pdo->prepare("SELECT * FROM historico WHERE id_conta=? ORDER BY data_operacao DESC");
						$sql->bindValue(1,$id);
						$sql->execute();

						if($sql->rowCount()>0){
							foreach ($sql->fetchAll() as $item) {
							?>
							<tr>
								<td><?php echo date('d/m/Y H:i',strtotime($item['data_operacao'])); ?></td>
								<td>
									<?php if($item['tipo'] == '0'):?>
										<font color="green">R$ <?php echo number_format($item['valor'],2,".",","); ?> </font>
									<?php else:?>
										<font color="red">R$ -<?php echo number_format($item['valor'],2,".",","); ?> </font>
									<?php endif; ?>
								</td>
							</tr>
							<?php
							}
						}
						?>
				</tbody>
			</table>
		</div>
	</div>

	
</div>

	<footer>
		Developed By Matheus Santos
	</footer>
</body>
</html>