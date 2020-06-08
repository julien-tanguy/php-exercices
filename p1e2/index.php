<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e2p1</title>
</head>
<body>
    <p>
        <?php $lastname = 'TANGUY'; 
        $firstname =  'Julien';
        $age = 30;
        //pour concatener, le . remplace le +.
        $phrase = 'bonjour je m\'appelle '  . $lastname . ' ' . $firstname .  'j\'ai ' . $age . ' ans.';
        echo $phrase;
        //dans des double cote, php va analyser la chaine pour trouver ce qu'il doit remplacer, donc plus gourmand en ressource
        ?>
    </p>
</body>
</html>