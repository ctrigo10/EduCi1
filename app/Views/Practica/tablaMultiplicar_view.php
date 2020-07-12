<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 2 - Ejercicio 2</title>
</head>
<body>
<h1>TABLA DE MULTIPLICAR DEL <?php echo $num; ?></h1>
    <?php for($i = 1; $i <= 10 ; $i++){ ?>
        <?php echo $num ." x ".$i. " = ". $num * $i; ?><br>
    <?php } ?>
</body>
</html>