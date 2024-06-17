<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_clinte";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conectado com sucesso";
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_produto";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conectado com sucesso";
?>