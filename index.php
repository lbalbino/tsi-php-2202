<?php

// $nome = 'lucas.balbino'; 

// //  

// //comentario de linha 
// #comentario de linha
// /*
// comentario 
// em 
// bloco
// */


// // documentação do php fica em: Http://www.php.net

// for ($i = 0; $i < 10; $i++ ) {
//     echo "$nome <br>";
// }
    
// $i = 0;
// while($i < 10) {

//     echo "lucas <br>";
//     $i++;
// }


// $i = 0;
// do {
//     echo "linha $i<br>";
//     $i++;
// } while ($i <= 10);



// if (5 > 10 ) {
//     echo "cinco é maior que dez";
// }
//  else {
//     for ($i = 0; $i < 10; $i++ ) {
//         echo "cinco não é maior que  dez <br>";
//     }
//  }

 // fim do if.

 $i = 5;
switch($i) {
    case 0:
       echo "Segunda-feira";
       break;     
    case 1:
       echo "terça-feira";
       break;     
    case 2:
       echo "Quarta-feira";
       break;     
    case 3:
       echo "Quinta-feira";
       break;     
    case 4:
       echo "Sexta-feira";
       break;     
    case 5:
       echo "Sabado";
       break;     
    case 6:
       echo "Domingo";
       break;   
       default:
       echo "Número invalido."; 
}



