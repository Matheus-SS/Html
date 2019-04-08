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
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/jquery.mask.min.js"></script>
	<script src="assets/js/jquery.validate.js"></script>
</head>

<body>
<div class="box-form">
	<form method="POST" action="includes/autenticaLogin.php" id="loginForm">
		<div class="input-box">
			<label></label>
			 <input type="text" name="agencia" placeholder="Agencia" id="agencia" autocomplete="off">
		</div>

		<div class="input-box">
			<label></label>
			<input type="text" name="conta" placeholder="Conta" id="conta"  autocomplete="off">
		</div>

		<div class="input-box">
			<label></label>
			<input type="password" name="senha" id="senha"  placeholder="Senha">
			<p id="senhaCaps">Caps Lock ativado</p>
		</div>
		
		<input type="submit" value="Entrar">
	</form>
</div>
</body>
</html>