<?php 
  session_start();
  include "conexao_pdo.php";

  $pdo = getConnection();

  $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?"); 
  $stmt->bindValue(1, $_POST['email']); 
  $stmt->bindValue(2, $_POST['senha']); 

  $stmt->execute();

  $obj = $stmt->fetchObject(); 

  if ($obj) { 
    $_SESSION['email'] = $_POST['email']; 
    $_SESSION['senha'] = $_POST['senha'];
    echo "<script>window.location='http://localhost/enviarjéssica/site/recursos.php' ;alert('Bem Vindo!');</script>";
  } else { 
    echo "<script>window.location='http://localhost/enviarjéssica/site/formulario.html' ;alert('Dados Incorretos, tente novamente.');</script>"; 
  } 
?>

