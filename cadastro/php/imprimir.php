<?php
    include "conexao_pdo.php";
    $conn = getConnection();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>expJob - Gerenciar Usuários</title>
        <meta name="description" content="Site para ajudar pessoas com problemas psicológicos">
        <meta name="author" content="Luma e Pedro">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Biblioteca do Bootstrap -->
        <link href="../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Css de ícones e fontes -->
        <link href="../libs/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <!-- Css customizado -->
        <link href="../css/main.css" rel="stylesheet">
    </head>
    <body>
        <!----------------------------------------------------MENU-------------------------------------------------------->
        <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#">Sistema de Cadastro</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">...</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#">...</a>
            <a class="dropdown-item" href="#">...</a>
            <a class="dropdown-item" href="#">...</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">...</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../cadastro.php">Cadastro</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Login</a>
        </li>
        </ul>
        <!-------------------------------------------------PHP - CONSULTA---------------------------------------------->
        <?php 
            // Consulta SQL que irá retornar valores do DB
            $sql_show = "SELECT * FROM relato";
            $stmt = $conn->prepare($sql_show);
            $stmt->execute();

            #Aqui criamos uma variavel chamada "funcionarios" onde ele recebe o resultado do objeto "stmt". com a função fatchALL, retornamos a lista de nomes, um array, mas como objetos, onde chamaremos mais abaixo no foreach
            $usuario = $stmt->fetchAll(PDO::FETCH_OBJ);
        ?>
        <!-------------------------------------------------TABELA ------------------------------------------------>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header">
                    <h2>Gerenciar</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Mensagem</th>
                            
                        </tr>
                        <?php foreach($relato as $rel): ?>
                            <tr>
                             
                                <td><?= $rel->email; ?></td>
                                <td><?= $rel->nome; ?></td>
                                <td>
                                    <a href="#" class="btn btn-info">Editar</a>
                                    <a onclick="return confirm('Tem certeza que deseja excluir usuario?')" href="delete.php?id=<?= $func->email ?>" class="btn btn-danger">Excluir</a>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </table>    
                </div>  
            </div>    
        </div>
    </body>
</html>