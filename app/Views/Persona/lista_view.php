<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($personas as $persona){ ?>
        <?php echo $persona['id']; ?>,
        <?php echo $persona['nombre']; ?>,
        <?php echo $persona['edad']; ?></br>
    <?php }?>
</body>
</html>