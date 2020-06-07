<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e6p3</title>
</head>
<body>
    <p><?php
    //decrementer $pas de 1 a chaque tour de boucle tant qu'il est supp à 0
    for ($pas = 20; $pas > 0; $pas--) {
        echo $pas . ' C\'est presque bon. <br />';
    }
    ?></p>
</body>
</html>