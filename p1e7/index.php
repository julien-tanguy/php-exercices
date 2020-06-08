<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e7p1</title>
</head>
<body>
        <?php 
            $lastname = 'TANGUY'; 
            $firstname =  'Julien';
            $age = 30; ?>
        <!--concaténe plusieurs variables dans une chaines de carractéres.-->
        <p><?= 'bonjour '  . $lastname . ' ' . $firstname .  ' tu as ' . $age . ' ans.' ?></p>
</body>
</html>