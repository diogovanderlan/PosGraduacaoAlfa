<?php 
require '../../autoload.php';

use Alfa\Usuario;

$dados = $_POST;

$dsn = 'mysql:host=localhost;dbname=alfa_turma3';

$dbh = new PDO($dsn, 'root', '');

$usuario = new Usuario($dados, $dbh);

if ($usuario->autenticar()){
	echo "Ola";

}


?>