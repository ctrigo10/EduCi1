<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculadora aritmetica helper</h1>
    <p>valora A: <?php echo $va ?></p>
    <p>valora B: <?php echo $vb ?></p>

    <p>Suma : <?php echo sumar($va,$vb) ?></p>
    <p>Resta : <?php echo restar($va,$vb) ?></p>
    <p>Multiplicación : <?php echo multiplicar($va,$vb) ?></p>
    <p>División : <?php echo dividir($va,$vb) ?></p>
</body>
</html>