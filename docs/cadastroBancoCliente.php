<?php
$sql = "INSERT INTO tabela cliente(nome, cpf, dataNascimento, cep, email, telefone, rua, bairro, numero,pripriedadeRural) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nome, $cpf, $dataNascimento, $cep, $email, $telefone, $rua, $bairro, $numero, $pripriedadeRural);



echo "Novo registro criado com sucesso<br>";
$stmt->close();


$sql = "SELECT id,nome, cpf, dataNascimento, cep, email, telefone, rua, bairro, numero,pripriedadeRural FROM cadastro_cliente";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. " - cpf: " .$row["cpf"]. " - dataNascimento: " .$row["dataNascimento"]. " - cep: " . $row["cep"].  " - Email: " . $row["email"]. 
        " - telefone: " . $row["telefone"].  " - rua: " . $row["rua"].  " - bairro: " . $row["bairro"].  " - numero: " . $row["numero"].  " - propriedadeRural: " . $row["propriedadeRural"].   "<br>";
    }
} else {
    echo "0 resultados<br>";
}


$sql = "UPDATE  SET email=? WHERE nome=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $novo_email, $nome);

$novo_email = "gabrielhirle@,com";
$nome = "Gabril";
$stmt->execute();

echo "Registro atualizado com sucesso<br>";
$stmt->close();


$sql = "DELETE FROM cadastro_cliente WHERE nome=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $bairro);

$bairro = "banhadao";
$stmt->execute();

echo "Registro deletado com sucesso<br>";
$stmt->close();


$conn->close();
?>
