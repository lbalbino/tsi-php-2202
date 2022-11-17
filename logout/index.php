<?php
//chama o controle de sessão
require_once '../controledeSessao/controle.php';
//destroi a sessão.
session_destroy();
//manda de volta após destrir a sessão. 
header('location:/tsi-php-2202/login/index.php');