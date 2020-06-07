<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e8p2</title>
</head>
<body>
<!--Traduire ce code avec des if et des else :  
echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';-->

    <?php
    $isOk = false;
    //vérifie la valeur de $isOk, si true, affiche $message du if, si false, affiche $message du else. condition (isOk) = (isOk == true).
    if ($isOk) {
        $message = 'c\'est ok !!!';
    }else {
        $message = 'c\'est pas bon !!!';
    }
    ?> 
    <p><?php echo $message; ?><p>
</body>
</html>