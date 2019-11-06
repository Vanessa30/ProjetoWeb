 <?php
session_start();

//inclue o arquivo onde contem dados da conexão
include 'conexao_pdo.php';

//	nova variavel onde guarda o objeto criado na funcao getConnection()
$conn = getConnection();

$id = $_GET['id'];

// Aqui capturamos através do metodo POST os valores passado lá no formulario pelo "name=''", lembra?
$nome  = $_POST['novo_nome'];
$email = $_POST['novo_email'];
$senha = $_POST['nova_senha'];

$sql_upd = "UPDATE usuarios set nome = :novo_nome, email = :novo_email, senha = :nova_senha WHERE id = :id";

$sql = $sql_upd;

$stmt = $conn -> prepare($sql);

$stmt -> bindParam(':id', $id);
$stmt -> bindParam(':novo_nome', $nome);
$stmt -> bindParam(':novo_email', $email);
$stmt -> bindParam(':nova_senha', $senha);
$stmt -> execute();

$_SESSION["email"] = $email;

echo "<script>window.location='http://localhost/enviarjéssica/site/recursos.php' ;alert('Seus dados foram alterados!');</script>";
	
?>
