<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
         
           

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="php/insere.php">
                        
                        <h2 class="form-title">Criar Conta</h2>
                        <?php
                            if ($_SESSION['dacsucess']):
                        ?>
                        <div class="alert alert-success" role="alert">
                            Cadastro Efetuado Com Sucesso!
                        </div>
                        <?php
                            endif;
                            unset($_SESSION['dacsucess'])
                        ?> 

                        <div class="form-group">
                            <input type="text" class="form-input" name="NomeUsuario" id="name" placeholder="Nome"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="EmailUsuario" id="email" placeholder="Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="SenhaUsuario" id="password" placeholder="Senha"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="CargoUsuario" id="cargo" placeholder="Profissão/Cargo"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Cadastrar"/>
                        </div>
                        
                    </form>
                </div>
            </div>
        </section>
        

    </div>
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>