<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 2 - Ejercicio 3</title>
</head>
<body>
<h1>MATRIZ DE <?php echo $num.' x '.$num; ?></h1>
    <table border="1">
        <?php $n=1; for($i = 1; $i <= $num ; $i++){ ?>
            <tr>
                <?php for($j = 1; $j <= $num ; $j++){ ?>
                    <td><?php echo $n++; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>