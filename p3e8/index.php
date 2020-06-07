<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e8p3</title>
</head>
<body>
    <p><?php
    //decrementer $pas de 12 a chaque tour de boucle tant qu'il est supp a 0
    for ($pas = 200; $pas > 0; $pas = $pas - 12) {
        echo $pas . ' Enfin!!!<br />';
    }
    ?></p>
</body>
</html>