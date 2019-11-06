<?php
    include "conexao_pdo.php";
    $conn = getConnection();

    $id = $_GET['id'];

    $sql = 'DELETE FROM pessoas WHERE id=:id';

    $stmt = $conn->prepare($sql);

    if ($stmt->execute([':id'=> $id])){
        header("location: imprimir.php");
    }
?> 

