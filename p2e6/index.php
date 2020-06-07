<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e6p2</title>
</head>
<body>
<!--Traduire ce code avec des if et des else :  
echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';-->

    <?php
    $age = 12;
    //vérifie la valeur de $age, si supp ou égale à 18 (>=) affiche majeur, sinon, affiche mineur.
    if ($age >= 18) {
        $message = 'Tu es majeur';
    }else {
        $message = 'Tu n\'es pas majeur';
    }
    ?> 
    <p><?php echo $message; ?><p>
</body>
</html>