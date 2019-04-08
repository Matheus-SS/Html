<?php
session_start();
require "includes/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Transação</title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
<div class="box-form">
	<form method="POST" action="includes/autenticaTransacao.php">
		<div class="input-box">
			<label style="color:white">Tipo de Conta</label>
			<select name="tipo">
				<option value="0">Depósito</option>
				<option value="1">Retirada</option>
			</select>
		</div>

		<div class="input-box">
			<label></label>
			<input type="text" name="valor" placeholder="Valor" pattern="[0-9,.]{1,}" autocomplete="off">
		</div>

		<input type="submit" value="Efetuar transação">
	</form>
</div>
</body>
</html>