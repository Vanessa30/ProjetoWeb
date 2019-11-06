<?php
    include "conexao_pdo.php";
    $conn = getConnection();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>expJob - Gerenciar Usuários</title>
        <meta name="description" content="Site para a busca de estágios (para agregação de experiência).">
        <meta name="author" content="Vanessa, Jéssica e Beatriz">
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
       
        <!-------------------------------------------------PHP - CONSULTA---------------------------------------------->
        <?php 
            // Consulta SQL que irá retornar valores do DB
            $sql_show = "SELECT * FROM usuarios";
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
                            <th>Senha</th>
                        </tr>
                        <?php foreach($usuario as $user): ?>
                            <tr>
                                <td><?= $user->nome; ?></td>
                                <td><?= $user->email; ?></td>
                                <td><?= $user->senha; ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </table>    
                </div>  
            </div>    
        </div>
    </body>
</html>