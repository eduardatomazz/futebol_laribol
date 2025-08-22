<?php include __DIR__.'/../partials/header.php'; $pdo=pdo();;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $posicao = $_POST['posicao'];
    $numero_camisa = $_POST['numero'];
    $id_time = 1; 

    $sql = "INSERT INTO joadores (nome, posicao, numero, id_time)
            VALUES ('$nome', '$posicao', '$numero_camisa', '$id_time')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Jogador</title>
    
</head>
<body>
    <h1>Adicionar Jogador</h1>
    <form method="POST">
        Nome: <input type="text" Name="Nome" required><br>
        posição: <textarea name="posicao" required></textarea><br>
        numero camisa: <input type="number" step="0.01" name="numero" required><br>
        <button type="submit">Salvar</button>
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>
<?php include __DIR__.'/../partials/footer.php'; ?>