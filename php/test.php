<?php
	$conn = mysqli_connect('localhost', 'root', '', 'pessoa');
	
	//Criar a conexao
if(!$conn){
		die("Conexão não efetuada:" . mysqli_connect_error());
}
	mysqli_select_db ($conn, 'relato');

?>