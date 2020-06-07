<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e7p2</title>
</head>
<body>
<!--Traduire ce code avec des if et des else :  
echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';-->

    <?php
    $isOk = true;
    //vérifie la valeur de $isOk, si false, affiche $message du if, si true, affiche $message du else.
    if ($isOk == false) {
        $message = 'c\'est pas bon !!!';
    }else {
        $message = 'c\'est ok !!!';
    }
    ?> 
    <p><?php echo $message; ?><p>
</body>
</html>