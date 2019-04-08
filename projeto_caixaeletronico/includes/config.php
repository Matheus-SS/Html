<?php //conexao com o banco
$dsn = "mysql:dbname=projeto_caixaeletronico;host=localhost;charset=utf8";
$dbuser="root";
$dbpass="";
try{
$pdo = new PDO($dsn,$dbuser,$dbpass);

}catch(PDOException $e){
	echo "Erro de conexao:". $e->getMessage();
}

?>