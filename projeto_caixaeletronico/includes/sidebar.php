<div class="sidebar" id="sidebar">
	<div class="btn-close" id="btn-close">
		<i class="fas fa-times"></i>
	</div>
	
	<h1><a href="index.php">Caixa XYZ</a></h1>
	<ul>
		<li><strong>Titular:</strong> <?php echo $info['titular'];?></li>
		<li><strong>Agencia: </strong><?php echo $info['agencia'];?></li>
		<li><strong>Conta:</strong> <?php echo $info['conta'];?></li>
		<li><strong>Saldo: R$</strong><?php echo number_format($info['saldo'],2,".",","); // mostrar formato o dinheiro?></li> 
		<li><strong><a href="sair.php">Sair</a></strong></li>

	</ul> 
	
</div>