<?php
require 'includes/config.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Caixa Eletronico</title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="assets/css/style.css"/>
	<style type="text/css">
		body{
			background-image: linear-gradient(45deg,#232526,#414345);
		}
	</style>
</head>

<body>
<div class="box-form">
	<form method="POST" action="includes/autenticaLogin.php">
		<div class="input-box">
			<label></label>
			 <input type="text" name="agencia" placeholder="Agencia" autocomplete="off">
		</div>

		<div class="input-box">
			<label></label>
			<input type="text" name="conta" placeholder="Conta" autocomplete="off">
		</div>

		<div class="input-box">
			<label></label>
			<input type="password" name="senha" placeholder="Senha">
		</div>
		
		<input type="submit" value="Entrar">
	</form>
</div>
</body>
</html>