<?php
$servername = "localhost";
$username = "cifrae35_cesl";
$password = "Senha54321@";
$dbname = "cifrae35_cifraeletra";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
?>





<?php
$sql = "SELECT * FROM tabela1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Iterar sobre cada linha de resultados
    while ($row = $result->fetch_assoc()) {
        // Acessar os valores das colunas por meio do array associativo $row
        $id = $row["id"];
        $nome = $row["nome"];
        $email = $row["email"];

        // Exibir os dados na tela
        // echo "ID: " . $id . "<br>";
        echo "Nome: " . $nome . "<br>";
        echo "E-mail: " . $email . "<br>";
        echo "<br>";
    }
} else {
    echo "Não há dados na tabela1.";
}

$conn->close();
?>