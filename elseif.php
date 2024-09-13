<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $nota1 = 4.5;
        $nota2 = 7;

        if ($nota1 > $nota2)
        {
            echo("La nota 1 es la mayor");
        }
        else {
            echo("La nota 2 es la mayor");
        }
        echo '<br>';
        $nota3 = 8.6;

        if ($nota1 > $nota2 and $nota1 > $nota3){
            echo("La nota 1 es la mayor");
        }
        elseif ($nota2 > $nota1 and $nota2 > $nota3) {
            echo("La nota 2 es la mayor");
        }
        else {
            echo("La mayor nota es la 3");
        }
    ?>
</body>
</html>