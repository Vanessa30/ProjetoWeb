<!DOCTYPE html>
<html>
<head>
	<title> ... </title>
</head>
<meta charset="utf-8">
<body>
<?php
include 'test.php';

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];


echo "Nome: $name <br>";
echo "E-mail: $email <br>";
echo "Mensagem: $message <br>";

mysqli_query ($conn, "INSERT INTO pessoa (name, email, message)
					  VALUES('$name', '$email', '$message')"

				);
mysqli_close($conn);

?>

</body>
</html>