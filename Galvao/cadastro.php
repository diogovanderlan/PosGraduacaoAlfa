<?php 
require '../../autoload.php';

use Alfa\Usuario;

$dados = $_POST;

$dsn = 'mysql:host=localhost;dbname=alfa_turma3';

$dbh = new PDO($dsn, 'root', '');

if ($dados['senha'] == $dados['confirmacao_senha']) {

	$dados['senha'] = password_hash($dados['senha'], PASSWORD_BCRYPT);
	//pegando o dados do formulario
	$usuario = new Usuario($dados, $dbh);
	//setando no array
	//var_dump($usuario);
	$usuario->persistir();
} else {
	echo ("senha nao confere");
}

?>