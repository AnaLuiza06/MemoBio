<?php

	$servidor = 'sql113.epizy.com';
	$usuario = 'epiz_31689067';
	$senha = 'kpchNgzsXHF95s';
	$dbnome = 'epiz_31689067_memobio';

	if($_SERVER['SERVER_NAME'] == 'localhost'){
		$servidor = 'localhost';
		$usuario = 'root';
		$senha = '';
		$dbnome = 'memobio';
	}

	$conn = mysqli_connect($servidor, $usuario, $senha, $dbnome);
	if(!$conn){
		die("Conexão falida:".mysqli_connect_error());
	}
