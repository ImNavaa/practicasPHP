<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencias</title>
</head>
<body>
    <h1>Potenciador de 2</h1>
    <form method="post">
        <label for="resultado">Introduce un numero: </label>
        <input type="text" id="valor" name="valor"><br>
        <input type="submit" name="aceptar" id="aceptar">
    </form>

    <?php
    
    if(isset($_POST['aceptar'])){
        echo $n = intval($_POST['valor']);
        for ($i = 1; $i <= $n; $i++) {
            echo "[",(2**$i),"]";
        }
    }
    else{
        echo " <br> nada";
    }
    ?>
</body>
</html>
