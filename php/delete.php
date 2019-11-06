<?php
    include "conexao_pdo.php";
    $conn = getConnection();

    $id = $_GET['id'];

    $sql = 'DELETE FROM usuarios WHERE id=:id';

    $stmt = $conn->prepare($sql);

    if ($stmt->execute([':id'=> $id])){
        echo "<script>window.location='http://localhost/enviarjéssica/site/recursos.html';</script>";
    }
?> 

