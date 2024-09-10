<?php
// Obtenha os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];

// Conecte-se ao banco de dados
$servername = "localhost";
$username = "cifrae35_cesl";
$password = "Senha54321@";
$dbname = "cifrae35_cifraeletra";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Insira os dados no banco de dados
$sql = "INSERT INTO tabela1 (nome, email) VALUES ('$nome', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Dados salvos com sucesso!";
} else {
    echo "Erro ao salvar os dados: " . $conn->error;
}


$email = $_POST['email'];

$sql = "SELECT * FROM tabela1 WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Dado já existe, não faça a inserção
    echo "O email já está cadastrado.";
    die;
} else {
    // Dado não existe, faça a inserção
    $sql = "INSERT INTO tabela1 (nome, email) VALUES ('$nome', '$email')";
    // Restante do código de inserção...
}


$conn->close();



?>