<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e4p1</title>
</head>
<body>
    <?php
    //variable de type string.
    $string = "variable string"; 
    //variable de type int (entier).
    $int = 34;
    //variable de type float (à virgule).
    $float = 45.65;
    //En php, une variable de type booléen, affiche 1 (true) ou 0 (false).
    $bool = true;
    ?>
    <p><?php echo $string; ?></p>
    <!--facon plus rapide pour ecrire un echo-->
    <p><?= $int ?></p>
    <p><?php echo $float; ?></p>
    <p><?php echo $string; ?></p>
</body>
</html>