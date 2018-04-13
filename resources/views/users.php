<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Esta página es para usuarios</h3>
    <ol>
        <?php
        foreach ($list_of_users as $usuario) {
            echo "<li>{$usuario}</li>";
        }
        ?>
    </ol>
</body>
</html>