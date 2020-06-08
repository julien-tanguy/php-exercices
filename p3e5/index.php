<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e5p3</title>
</head>
<body>
    <?php
    //ajouter un pas a chaque tour de boucle tant qu'il est inferieur ou egale a 15
    for ($pas = 1; $pas <= 15; $pas++) {
        ?><p><?php echo $pas . ' On y arrive presque.'; ?></p><?php
    }
    ?>
</body>
</html>