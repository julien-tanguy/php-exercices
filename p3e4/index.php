<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e4p3</title>
</head>
<body>
    <p><?php
    //tant que $number est inférieur ou égale a 10, l'incrementer de la moitié de sa valeur
    for ($number = 1; $number <= 10; $number = $number + $number/2) {
        echo $number . '<br />';
    }
    ?></p>
</body>
</html>