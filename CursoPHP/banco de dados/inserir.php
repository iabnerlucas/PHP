<?php
$host = "sql100.infinityfree.com";
$user = "if0_39578970";
$senha = "akCaE0UrmdNVg";
$banco = "if0_39578970_meubanco";

$conn = new mysqli($host, $user, $senha, $banco);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$nome = $_POST['nome'] ?? '';

if (!empty($nome)) {
    $stmt = $conn->prepare("INSERT INTO pessoas (nome) VALUES (?)");
    $stmt->bind_param("s", $nome);
    if ($stmt->execute()) {
        echo "Nome inserido com sucesso!";
    } else {
        echo "Erro ao inserir: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Nome vazio.";
}

$conn->close();
?>
