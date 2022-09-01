<?php

// <!--  $diasemana[0] = 'domingo';
//  $diasemana[1] = 'segunda'; -->

$diadasemana = array (0 =>'domingo',
1 => 'segunda' ,
2 => 'terça',
3 => 'quarta',
4 => 'quinta',
5 => 'sexta',
6 => 'sabado');

// <!-- $diadasemana = array [0 = 'domingo', 1 = 'segunda']; -->

// echo json_encode($diadasemana);

// outra forma de fazer
// $diadasemana = array (0 =>'domingo', 1 => 'segunda' , 2 => 'terça' , 3 => 'quarta' , 4 => 'quinta', 5 => 'sexta' , 6 => 'sabado');


$aluno =[0 => ['matricula' => 41217,
 'nome' => 'joao',
  'semestre' => 2],
  1 => ['matricula' => 41218,
   'nome' => 'maria',
    'semestre' => 3]];




// $html = "<table>";

// $html =  "<tr>";
// $html = "<td>";
// $html = "<td>";
// $html = "<td>";
// $html =  "<tr>";

// $html = "</table>";

echo  "<table border = 1>
    <tr>
    <td>matricula</td><td>nome</td><td>semestre</td>
    </tr>
";

for($i = 0 ; $i < count($aluno); $i++) {
    echo " <tr>
    <td>{$aluno[$i]['matricula']}</td>
    <td>{$aluno[$i]['nome']}</td>
     <td>{$aluno[$i]['semestre']}</td>
    </tr>";
}

echo "</table>";
// $hoje = date('w');
// var_dump($hoje);
// echo "hoje é {$diadasemana[$hoje]}";


// var_dump($aluno);
