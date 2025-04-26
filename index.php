<?php

ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');

$servername = "192.168.0.102";
$username = "root";
$password = "Senha123";
$database = "estudodocker";

$link = new mysqli($servername, $username, $password, $database);

if (mysqli_connect_errno()){
	printf("Falha na conexao: %s\n", mysqli_connect_error());
	exit();
}

$valor_randomico= ran(1, 9999);
$string_randomico = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$decimal_randomico = rand (1*10, 1000000*10) / 10;
$nome_host = gethostname();

$query = "INSERT INTO leilao (IdProposta, NomeProponente, SobrenomeProponente, ValorProposta, Host) VALUES ('$valor_randomico', '$string_randomico', '$string_randomico', '$decimal_randomico', '$nome_host'";

if ($linl->query($query) === TRUE) {
	echo "Gravado nova linha no banco";
} else {
	echo "Erro ao gravar no banco: " . $link->error;
}

?>
