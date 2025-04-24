<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canta elefante</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 cl-sm-8 col-md-6">
            <form method="post">

                <div class="form-group row">
                    <div class="col-12 col-sm-6">
                        <input type="number" name="elefante" id="elefante" class="form-control form-control-lg" placeholder="Quantidade de elefantes">
                    </div>

                    <div class="col-12 col-sm-6">
                        <button type="submit" class="btn btn-lg btn-block btn-outline-success">
                            Cante
                        </button>
                    </div>
                </div>

            </form>

        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-sm-10 alert alert-info">
                <?php
                if(isset($_POST['elefante'])){
                    $quantidade_inicial = $_POST['elefante'];
                    if ($quantidade_inicial >= 1) {
                        for($j=$quantidade_inicial; $j>=1; $j-- ){
                            if($j%2=='0'){
                                echo $j.' elefantes ';

                                for($i = 0; $i<$j; $i++){
                                    echo 'incomodam, ';
                                }

                                echo 'muito mais...<br>';
                            }
                            else if($j=='1'){
                                echo '<p class="text-dark">'.$j.' elefante incomoda muita gente </p>';
                            }
                            else{
                                echo '<p class="text-dark ">'.$j.' elefantes incomodam muito mais!</p>';
                            }
                        }
                    } else {
                        echo '<p class="text-dark">Digite um número maior ou igual a 1.</p>';
                    }
                }
                else{
                    echo  '<p class="text-dark">Selecione a quantidade de elefantes</p>';
                }
                ?>
            </div>
        </div>

        </div>
    </div>
</div>

</body>
</html>