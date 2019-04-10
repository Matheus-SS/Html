<?php
session_start();
require "includes/config.php";
include 'includes/info.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Transação</title>
	<?php include "includes/header.php"?>
</head>
<body>

<?php include "includes/sidebar.php"?>
<div class="content">
	<div class="btn-mob" id="btn-mob">
			<i class="fas fa-bars"></i>
		</div>
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
</div>
</body>
</html>