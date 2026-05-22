<?php
require_once "../conexao.php";

$id = $_GET['id'];
try {
    $sql = "DELETE FROM usuarios WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);

    header("Location: listar.php");
    exit;
} catch (PDOException $e) {
    die("Erro ao excluir: " . $e->getMessage());
}

?>