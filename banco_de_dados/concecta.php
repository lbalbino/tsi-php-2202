<?php

$dsn = 'mysql:dname=senac;host=localhost;port=3307';
$user = 'root';
$pass = '';


$bd = new PDO($dsn, $user, $pass);


var_dump($bd);
