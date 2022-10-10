<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <title>Calcula IMC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php
    $peso=$_POST['peso'];
    $altura=$_POST['altura'];
    $imc=$peso/pow($altura,2);
    echo "<H1 class='text-center'>Resultado</h1>";
    if($imc<18.5){
        echo "<input type='text' class='form-control col-6 mx-auto' value=".$imc.">";
        echo "<h3 class='text-center'>delgado</h3>";
    }
    else if($imc>=18.5 and $imc<24.9){
        echo "<input type='text' class='form-control col-6 mx-auto' value=".$imc.">";
        echo "<h3 class='text-center'>normal</h3>";
    }
    else if($imc>=24.9 and $imc<30){
        echo "<input type='text' class='form-control col-6 mx-auto' value=".$imc.">";
        echo "<h3 class='text-center'>sobrepeso</h3>";
    }
    else{
        echo "<input type='text' class='form-control col-6 mx-auto' value=".$imc.">";
        echo "<h3 class='text-center'>obesidad</h3>";
    }



    ?>
</body>
</html>