<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <link rel="shortcut icon" href="img/iconedog.jpg" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" defer src="libs/jquery/jquery-3.3.1.min.js"> </script>
    <script type="text/javascript" defer src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" defer src="js/main.js"> </script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat: 400, 700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato: 400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <title>DOGUINHOS</title>
  </head>

  <body>
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
        <li class="nav-item">
          <a class="nav-link" href="formulario.html">LOGIN </a>
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
  <br><br><br><br><br><br><br>



  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" src="img/dog10.jpg" width="140" height="140"/>
        <h4>Ajude-nos a mapear os animais </h4>
        <p>Você pode nos ajudar por meio de comentários informando-nos onde há cachorros em situação de rua, fornecendo-nos a localização e a quantidade média de animais.</p>
      <!
      <form action="insere.php" method="post">
      <B>Qual sua cidade?</B><br>
      <select name=processador>
      <option value=Pentium>Guanambi</option>
      <option value=AMD>Candiba</option>
      <option value=Celeron>Caetité</option>
     <option value=Pentium>Pindaí</option>
      <option value=AMD>Urandi</option>
      <option value=Celeron>Igaporã</option>
     <option value=Pentium>Palmas de Monte Alto</option>
      <option value=AMD>Carinhanha </option>
      <option value=Celeron>Malhada</option>
     <option value=Pentium>Caculé</option>
      <option value=AMD>Espinosa</option>
      <option value=Celeron>Lagoa Real </option>
    
      </select><BR><BR>
      <div class="form-group">
                          
        <label for="bairro" id="bairro" class="alinhalabel">BAIRRO</label>
        <input type="text" class="form-control formu" style="width: 200px;" name="NomeUsuario" id="name">
      </div>

        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
  
    <img class="bd-placeholder-img rounded-circle" src="img/dog11.jpg" width="140" height="140"/>

        <h4>Doe ração </h4>
        <p>Você pode fazer doações intermediadas por nós que chegarão a nossas ONGs parceiras. As doações podem ser feitas diretamente nas ONGs ou podem ser enviadas via correspondência. </p>
        <form method="post" action="insere.php" id="formCadastrarse">
      <div class="form-group" align="center">
        <label for="email"  id=" email" class="alinhalabel">EMAIL</label>
        <input type="email" class="form-control formu" style="width: 200px;" id="email" name="email">  
      </div>
      <form action="radio.php" method="post">
<B>Forma de entrga da doação</B><br>
<input type=radio name=sistema value="Windows 98"> Correios 
<input type=radio name=sistema value="Windows XP"> Pessoalmente 

<br><br>
</form>
       
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" src="img/dog12.jpg" width="140" height="140"/>
        <h4>Seja voluntário</h4>
        <p>Caso alguma de nossas ONGs esteja localizada 
          perto de você, você pode se tornar um voluntário ativo, basta contatar-nos via e-mail.</p>
          <form method="post" action="form.php" id="formCadastrarse">
      <div class="form-group" align="center">
        <label for="email"  id=" email" class="alinhalabel">EMAIL</label>
        <input type="email" class="form-control formu" style="width: 200px;" id="email" name="email">  
      </div>
        
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    <!-- /END THE FEATURETTES -->
  </div><!-- /.container -->
     <footer id="rodape">
   
   <p> Iniciativa: Site criado com propósito avaliativo para a displina de Progamação web II, Instituto Federal Baiano.
        </br>
   </p>
   
     <p> 
         <br>
          
      Whatsapp: (77) 9 9815180<br>
      E-mail: doguinhosgbi@gmail.com

     </p>

     <p>Copyright &copy; 2019 - by Beatriz Soare, Jéssica Nascimento & Vanessa Freire </p>

        
  </footer>
  
</body>
</html>