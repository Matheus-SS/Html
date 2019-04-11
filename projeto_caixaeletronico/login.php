<?php
require 'includes/config.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Caixa Eletronico</title>
	<?php include "includes/header.php"?>
</head>

<body>
<div class="box-form">
	<form method="POST" action="includes/autenticaLogin.php" id="loginForm">

		<?php if(isset($_SESSION['msgAlert'])):?>
				<div class=" <?php echo $_SESSION['classAlert'];?>">
					<strong><?php echo $_SESSION['msgAlert'];?></strong>
					<?php 
					unset ($_SESSION['msgAlert']);
					unset ($_SESSION['classAlert']);
					?>
				</div>
		<?php endif ?>
		
		<div class="input-box">
			<label></label>
			 <input type="tel" name="agencia" placeholder="Agencia" id="agencia" autocomplete="off">
		</div>
		<div class="input-box">
			<label></label>
			<input type="tel" name="conta" placeholder="Conta" id="conta"  autocomplete="off">
		</div>

		<div class="input-box">
			<label></label>
			<input type="password" name="senha" id="senha"  placeholder="Senha">
			<p id="senhaCaps" class="error">Caps Lock ativado</p>
		</div>
		
		<input type="submit" value="Entrar">
	</form>
</div>
</body>
</html>