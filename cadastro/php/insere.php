<?php
session_start();
/*	arquivo "insere.php" insere dados na tabela
	atraves de declarações pdo
*/

//inclue o arquivo onde contem dados da conexão
include 'conexao_pdo.php';

//	nova variavel onde guarda o objeto criado na funcao getConnection()
$conn = getConnection();


// Aqui capturamos através do metodo POST os valores passado lá no formulario pelo "name=''", lembra?
$name  = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//	Guardo na variavel $sql a minha consulta ao banco de dados com os place-holders
$sql_insert = "INSERT INTO mensagem (name, email, message) VALUES ('$name', '$email', '$message')";

// nova variavel é criada recebendo os dados do objeto e do metodo "prepare"
$stmt = $conn->prepare($sql_insert);

/*	criamos uma variável que guarda o objeto "$conn". Como "stmt" agora é um objeto, então podemos
	também utilizar seus muitos metodos. um deles é o bindValue, onde podemos associar os valores de acordo com as posições que passamos com as interrogações.
*/	
$stmt->bindValue(1, $name);		//Desse modo podemos chamar os métodos da classe. Uma delas é o bindValue
$stmt->bindValue(2, $email);
$stmt->bindValue(3, $message);


/*
 Aqui, através da função "header" fazemos um redirecionamento de página.
  Nesse caso ele redireciona para a mesma página "cadastro.php", onde há uma condicional lá(verificar lá). 
  Caso a execução abaixo "execute()" der certo, então ele exibe um alert 
  mostrando a mensagem indicando que deu certo.
 */
header("Location: ../../meajuda.html");


//utilizamos o metodo "execute()" para rodar. caso não execute, cairá na segunda condição.
if($stmt->execute()){
	$_SESSION['dacsucess'] = true;
}else{
	echo '<p>'.'Erro ao salvar';
}
exit;