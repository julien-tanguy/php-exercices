<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e7p3</title>
</head>
<body>
    <p><?php
    //incrementer $pas de 15 a chaque tour de boucle tant qu'il est inf a 100
    for ($pas = 1; $pas < 100; $pas = $pas + 15) {
        echo $pas . ' On tient le bon bout. <br />';
    }
    ?></p>
</body>
</html>