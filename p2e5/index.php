<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e5p2</title>
</head>
<body>
<!-- Traduire ce code avec des if et des else : 
echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';-->

    <?php
    $gender = 'homme';
    //$gender ne peut être égale qu'à homme ou femme. si gender n'est pas égale (!=), alors il est égale à femme.
    if ($gender != 'homme') {
        $message = 'C\'est une développeuse !!!';
    }else {
        $message = 'C\'est un développeur !!!';
    }
    ?> 
    <p><?php echo $message; ?><p>
</body>
</html>