
<?php
//Buscamos o codigo que conecta no SGBD
require_once '../bancoDeDados/conecta.php';
//Apenas para ficar mais facil de trabalhar com o dado
//enviado pelo usuario 
$id = $_POST['id'] ?? 0;
// ?? quando não existe $_post['id'] atribui

//Evito que seja recebido em $id qualquer coisa que seja
//diferente de números (dígitos)
$id = preg_replace('/\D/', '', $id);

if ($bd->exec("DELETE FROM alunos WHERE id = $id")) {



    $apagando = true;
} else {



    $apagando = false;
}



include 'index.php';
