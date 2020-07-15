<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 2 - Ejercicio 4</title>
</head>
<body>
    <h1>LISTA DE PRODUCTOS</h1>
    <table border="1">
        <thead>
            <tr>
                <th>CODIGO</th>
                <th>PRODUCTO</th>
                <th>PRECIO</th>
                <th>CANTIDAD</th>
                <th>FECHA SALIDA</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($productos as $producto){ ?>
                <tr>
                    <td><?php echo $producto['CODIGO']; ?></td>
                    <td><?php echo $producto['PRODUCTO']; ?></td>
                    <td><?php echo number_format($producto['PRECIO'],2); ?></td>
                    <td><?php echo $producto['CANTIDAD']; ?></td>
                    <td><?php echo $producto['FECHA_SALIDA']; ?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>