<?php declare(strict_types = 1);

	require '../../src/Admin.php';
	require_once '../../src/Usuario.php';

	//estanciando obj
	$a = new Admin('galvao@galvao.eti.br','1234', 555222);
	$u = new Usuario('diogog@gamiil.com','11111',55555);
	
	$o = new class(2){
		public $x;
		public $y;
		public function __construct($z){
			$this->x = 3;
			$this->y = $z;

		}
	};
	$a = serialize($u);

	var_dump($a);

	$u2 = unserialize($a, ['allowed_classes' => [
		'Usuario', 
		'Admin'
	]]);

	var_dump($u2);



	//--------------------------COMENTARIOS------------------------================

	/*
	unserialize -> Cria um valor PHP a partir de uma representação armazenada
	allowed_classes -> classes permitidas 


	antecipar  a destruiçao
	$u = NULL;
	escrever no arqivo log
	Usuario::log('Teste');
	$a = [1, 2, 3];

	$a = array_map(function ($p){ return $p + 1;
	}, $a);
	
	var_dump($a);
	SSSSSvar_dump($u);

	$u->email = 'xxx';

	$u->email = 'galvao@galvao.eti.br';
		$u->senha = '1234';

	chamando a funçao
	if ($u->autenticar()) {
		echo 'ok!<hr>'; 	
	}
*/


 ?>