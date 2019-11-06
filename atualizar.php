<doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <link rel="shortcut icon" href="img/iconedog.jpg" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <script type="text/javascript" defer src="libs/jquery/jquery-3.3.1.min.js"> </script>
    <script type="text/javascript" defer src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" defer src="js/main.js"> </script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat: 400, 700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato: 400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>DOGUINHOS</title>


    <!-- Bootstrap core CSS -->

<body background="img/fundoform8.jpg" no repeat>
  <header>
    <nav  id="mainNav" class="navbar navbar-expand-sm fixed-top bg-secundario">
    <div class="container">
      <button id="botao-nav" class="navbar-toggler navbar-toggler-right-text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <i class="fa fa-bars">  </i>
      </button>
      <a class="navbar-brand" href="index.html"> DOGUINHOS </a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav ml-auto mt-2 mt-sm-0"></ul>
        <li class="nav-item">
          <a class="nav-link" href="index.html">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="colabore.php">COLABORE</a>
        </li>
        <li class="nav-item dropdown text-white">
                <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php 
                    include 'php/verificar.php';
                    include 'php/conexao_pdo.php';  


                    //  nova variavel onde guarda o objeto criado na funcao getConnection()
                    $conn = getConnection();
                    $email = $_SESSION['email'];
                    $senha = $_SESSION['senha'];

                  // Consulta SQL que irá retornar valores do DB
                    $sql_show = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
                    $stmt = $conn->prepare($sql_show);
                    $stmt->execute();

                    //Aqui criamos uma variavel chamada "funcionarios" onde ele recebe o resultado do objeto "stmt". com a função fatchALL, retornamos a lista de nomes, um array, mas como objetos, onde chamaremos mais abaixo no foreach
                    $usuario = $stmt->fetchAll(PDO::FETCH_OBJ);

                ?>
                <?php foreach($usuario as $user): ?>
                <?php echo $user->nome; ?>
                <?php endforeach; ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdown">
                  <a class="dropdown-item" style="color: black; font-size:15px;" href="php/imprimir.php">Lista de Usuários</a>
                  <a class="dropdown-item" style="color: black; font-size:15px;" href="atualizar.php?id=<?= $user->id ?>">Atualizar Dados</a>
                  <a class="dropdown-item" style="color: black; font-size:15px;" href="php/delete.php?id=<?= $user->id ?>">Deletar Conta</a>
                  <a class="dropdown-item" style="color: black; font-size:15px;" href="php/logout.php">Sair</a>
                </div>
              </li>
      </div>
    </div>
    </nav>
  </header>

<!-- End menu -->
</br></br></br></br></br>

<div align="center">
<div id="formulario">
  <div class="row"> <!-- INIT row -->


  <div class="col-sm-3">
    <form method="post" action="php/editar.php?id=<?= $user->id ?>" id="formCadastrarse">
  
      <div class="form-group">
                          
        <label for="usuario" id="usuario" class="alinhalabel">NOVO NOME</label>
        <input type="text" class="form-control formu" style="width: 200px;" name="novo_nome" id="name" required>
      </div>
      <div class="form-group" align="center">
        <label for="email"  id=" email" class="alinhalabel">NOVO EMAIL</label>
        <input type="email" class="form-control formu" style="width: 200px;" name="novo_email" id="email" required>  
      </div>
     
      <div class="form-group">
        <label for="senha" id=" senha" class="alinhalabel">NOVA SENHA</label>
        <input type="password" class="form-control formu" style="width: 200px;" name="nova_senha" id= "password" required>  
      </div>

      <button id="botao-cad" type="submit" class="btn btn-primary"> ATUALIZAR </button>
    </form>
  </div>
  </div>
</div>
</div>
<div class="col-sm-6"></div>

          
 <!-- END ROW-->

</body>
</html>