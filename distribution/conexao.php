<?php
define('HOST', 'localhost');
define('USER', 'jhulianespineli');
define('PASS','123456x');
define('DBNAME', 'JhulianeSpineli');

$conn = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';',USER, PASS);

$servidor = "localhost";
$usuario = "jhulianespineli";
$senha = "123456x";
$dbname = "JhulianeSpineli";
$conn2 = mysqli_connect($servidor, $usuario, $senha, $dbname);