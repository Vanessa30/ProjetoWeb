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
          <a class="nav-link" href="recursos.php">HOME</a>
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

<!-- Seção informativa -->
<section id="informativa"> 
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/dog14.jpg" alt!st slide">
        <div class="carousel-caption d-none d-sm-block">
       <h2>OS CACHORROS SÃO CAPAZES DE NOS ENTENDER! </h2>
          <p> Elem nos compreendem. Cães são animais muito bem qualificados para interpretar gestos e sinais humanos. </p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/dog1.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-sm-block">
         <h2>O CACHORRO PODE SER SEU COMPANHEIRO!</h2>
         <p> Para aqueles que vivem sozinhos, ter um cão é a melhor solução. Nunca mais você chegará em sua casa e ela estará vazia, você sempre terá um ser de bom humor a sua espera e que te receberá com carinho e “um sorriso”. </p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/dog2.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-sm-block">
          <h2>OS CACHORROS TÊM SENTIMENTOS! </h2>
          <p> Os cachorros têm o hormônio ocitocina, aquele que segregamos quando estamos apaixonados ou sentimos afeto pelos outros. 
          </p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>
<!-- End -->

 <!-- START THE FEATURETTES -->

    <div class="container">

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 ">
        <h2 class="featurette-heading parte2">Quem somos? <span class="text-muted">O que é a Doguinhos</span></h2>
        <p class="lead">A Doguinhos é uma comunidade de ONGs e abrigos de ajuda a animais de rua, especialmente voltada para cachorros. O objetivo é unir várias ONGs para que a maior quantidade possível de animais seja amparada. </p>
      </div>

      <!--<div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="img/dog6.jpg"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>-->

      <div class="col-md-5">
        <img src="img/dog19.jpg" class="img-fluid" alt="Responsive image">
      </div>

    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading parte2">O que fazemos? <span class="text-muted">Como funcionamos</span></h2>
        <p class="lead">O primeiro passo da parceria da Doguinhos com as ONGs e abrigos é o cadastro destes em nosso site. A Doguinhos faz um mapeamento dos animais, localizando onde há cachorros nas ruas, e notifica as ONGs e abrigos parceiros, uma vez que estes estejam cadastrados. A partir disso, fica a cargo das ONGs recolher os animais, de acordo com sua capacidade.  </p>
      </div>
       <div class="col-md-5">
        <img src="img/dog15.jpg" class="img-fluid" alt="Responsive image">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading parte2">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <img src="img/dog16.jpeg" class="img-fluid" alt="Responsive image">
      </div>
    </div>

    <hr class="featurette-divider">

    </div>


 <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

<!-- /.rodapé -->
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