<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e2p3</title>
</head>
<body>
    <?php
    $number = 0;
    $number2 = 32;
    
    while ($number < 20) {
        //multiplie $number par $number2
        $multi = $number * $number2;
        //affiche le resultat
        ?><p><?php echo $multi; ?></p><?php
        //incremente $number
        $number++;
    }
    ?>
</body>
</html>