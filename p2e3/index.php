<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e3p2</title>
</head>
<body>
    <?php $age = 22;
    $gender = 'femme';
    //verifier le genre
    if ($gender == 'homme') {
        //sihomme = true, verifier age
            if ($age >= 18) {
                $message = 'Vous êtes un homme majeur.';
            } else {
                $message = 'Vous êtes un homme mineur.';
            } 
    //si homme = false
    }else {
            if ($age >= 18) {
                $message = 'Vous êtes une femme majeur.';
            } else {
                $message = 'Vous êtes femme mineur.';
            }
    }
    ?> 
    <p><?php echo $message; ?><p>
</body>
</html>