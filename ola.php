<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            background-color: red;
            font-size: 28px;
        }
    </style>
</head>
<body>
    <h1>Felipe</h1>
    <div>
    <?php
        $nota = 10.5;
        echo "Nota Final: $nota";
        echo "<div>Nota final: $nota</div>"
    ?>
    </div>
</body>
</html>