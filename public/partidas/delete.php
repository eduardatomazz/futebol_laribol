<?php include __DIR__.'/../partials/header.php'; $pdo=pdo();
$id = $_GET['id'];

$sql = " DELETE FROM partidas WHERE id=$id ";

if ($conn->query($sql) === true) {
    echo "Registro excluído com sucesso.
        <a href='read.php'>Ver registros.</a>
        ";
} else {
    echo "Erro " . $sql . '<br>' . $conn->error;
}
$conn -> close();
exit();
?>