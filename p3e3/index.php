<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e3p3</title>
</head>
<body>
    <?php
    $number = 100;
    $number2 = 32;
    
    while ($number >= 10) {
        //multiplie $number par $number2
        $multi = $number * $number2;
        //affiche le resultat
        ?><p><?php echo $multi; ?></p><?php
        //decremente $number
        $number--;
    }
    ?>
</body>
</html>