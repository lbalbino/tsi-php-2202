<?php
//Buscamos o codigo que conecta no SGBD
require_once '../bancoDeDados/conecta.php';

//Apenas para ficar mais facil de trabalhar com o dado
//enviado pelo usuario 
$id = $_POST['id'] ?? 0;
// ?? quando não existe $_post['id'] atribui


$stmt = $bd->prepare('SELECT 
                            id,
                                nome,
                                    turno,
                                        inicio 
                            FROM 
                                alunos
                            where 
                                id = :id');
$stmt->bindParam(':id', $id);

$stmt->execute();

$aluno = $stmt->fetch(PDO::FETCH_ASSOC);

// Mostrar um  formulario html para o usuario
//com os dados do aluno selecionado para ser editado. 
var_dump($aluno);