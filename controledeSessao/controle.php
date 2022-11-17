<?php

//Inicia o sistema de controle de sessão
session_start();

//verifica se o usuario está logado
//em nossa aplicação
if( !isset($_SESSION['id']) ) {

    //se não estiver, é direcionado para tela de login;
    header('location:/tsi-php-2202/login/index.php');
    exit();
}