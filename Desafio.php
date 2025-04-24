<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números primos uhul</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 cl-sm-8 col-md-6">
            <form method="post">
                <div class="form-group row">
                    <div class="col-12 col-sm-6">
                        <input type="number" name="numero" id="numero" class="form-control form-control-lg" placeholder="Insira um número UwU">
                    </div>

                    <div class="col-12 col-sm-6">
                        <button type="submit" class="btn btn-lg btn-block btn-outline-success">
                            Taca-lê pau :3
                        </button>
                    </div>
                </div>
            </form>

        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-sm-10 alert alert-info">
                <?php
                 $numero = $_POST['numero'];
                 $divisor = 0;
                 
                 for($conta = 2; $conta < $numero; $conta++)
                  if($numero % $conta == 0){
                   echo "É multiplo de $conta!<br/>";
                   $divisor++;
                  }
                 
                 if($divisor)  echo "Vish! Ele tem $divisor divisores além de 1 e ele mesmo! É primo nada!";
                 else {
                    echo "$numero é primão!";
                 }
                ?>
            </div>
        </div>
        </div>
    </div>
</div>

</body>
</html>
