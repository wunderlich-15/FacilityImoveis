<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'facility');

$conexao = new mysqli("127.0.0.1:3306","root","","facility") or die ('Não foi possivel conectar');