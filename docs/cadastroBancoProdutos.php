<?php
$sql = "INSERT INTO minha_tabela ( tipoProduto, nomeProduto, tipoVolume, peso) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $tipoProduto, $nomeProduto, $tipoVolume, $peso);



echo "Novo registro criado com sucesso<br>";
$stmt->close();


$sql = "SELECT id, tipoProduto, nomeProduto, tipoVolume, peso FROM cadastroProduto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - tipoProduto: " . $row["tipoProduto"]. " -nomeProduto: " . $row["nomeProduto"]. " -tipoVolume: " . $row["tipoVolume"].
        " -peso: " . $row["peso"]. "<br>";
    }
} else {
    echo "0 resultados<br>";
}


$sql = "UPDATE cadastroProduto SET peso=? ";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $novo_peso);

$peso = "10.000 Kg";
$stmt->execute();

echo "Registro atualizado com sucesso<br>";
$stmt->close();


$sql = "DELETE cadastroProduto FROM  WHERE tipoVolume=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $tipoVolume);

$tipoVolume = "granel";
$stmt->execute();

echo "Registro deletado com sucesso<br>";
$stmt->close();


$conn->close();
?>