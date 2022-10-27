<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <a href="formincluir.php"><button class="btn btn-primary"> Adicionar aluno </button></a>

        <?php
        if (isset($apagou)) {

            if (!$apagou) {

                echo ' <div class= "alert alert-danger" role= "alert">
                    ERRO ao tentar apagar o aluno!
                </div';
            } else {

                echo ' <<div class= "alert alert-danger" role= "alert">
            Aluno apagado com sucesso
        </div>';
            }
        }

        ?>
        <form method="post">

            <table class="table">
                <thead>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Turno</td>
                    <td>Inicio</td>
                    <td>Ações</td>
                </thead>

                <?php
                foreach ($alunos as $aluno) {
                    echo   "    <tr>
                        <td>{$aluno['id']}</td>
                        <td>{$aluno['nome']}</td>  
                        <td>{$aluno['turno']}</td>
                        <td>{$aluno['inicio']}</td> 
                        <td>
                            <button type= 'submit' 
                                class= 'btn btn-danger'
                                formaction='apagar.php'                            
                                value='{$aluno['id']}'
                                name = 'id'>
                                Apagar
                             </button>   
                        </td>
                        <td>
                            <button type= 'submit' 
                                class= 'btn btn-success'
                                formaction='Editar.php'                            
                                value='{$aluno['id']}'
                                name = 'id'>
                                Editar
                             </button>   
                        </td>
                        
                    </tr>";
                }
                ?>
</body>
</form>

</html>