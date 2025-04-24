<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-container-center">
            <div class="col-12 col-sm-8 alert alert-info">
                <h2 class="dark-text mt-3">
                    Trabalho sobre array :3
                </h2>
                <h5 class="dark-text">
                    Primeira maneira (Normal):
                </h5>
                    <p class="text-dark">
                     $dados = array('Banana', 'Maça', 'Goiaba');
                    </p>
                <h5 class="dark-text">
                    Segunda maneira (Simplificada):
                </h5>
                    <p class="text-dark">
                     $dados = ['Banana', 'Maça', 'Goiaba'];
                    </p>
                <h5 class="dark-text">
                    Verificando o conteúdo do Array:
                </h5>
                    <p class="text-dark">
                    <?php 
                    $dados=['banana', 'maça', 'goiaba'];
                    echo 'var_dump() <br>';
                    var_dump($dados);
                     ?>
                    </p>
                <h5 class="dark-text">
                    Adicionando conteúdo ao Array:
                </h5>
                    <p class="dark-text">
                    <?php
                      $dados=['banana', 'maça', 'goiaba'];
                      $dados[] = 'melao';
                      echo '$dados[] = melao <br>';
                      echo
                      var_dump($dados);
                    ?>
                    </p>
                <h5 class="dark-text">
                    Adicionando elemento ao Array:
                </h5>
                <p class="dark-text">
                    <?php
                      echo '$dados[] = <br>';
                    ?>
                </p>
                <h5 class="dark-text">
                    Imprimindo um índice em específico:
                </h5>
                <p class="dark-text">
                    <?php
                      echo 'echo $dados[]= <br>';
                      echo '<br> goiaba';
                    ?>
                </p>
                <h5 class="dark-text">
                    Imprimindo todos os índices no Array:
                </h5>
                <p class="dark-text">
                  
                </p>
                

            </div>
        </div>
    </div>
</body>
</html>