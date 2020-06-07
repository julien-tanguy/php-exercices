<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e2p2</title>
</head>
<body>
    <?php $isEasy = false;
    //si $isEasy = true, afficher : 
    if ($isEasy) {
        $message = 'C\'est facile!!!';
    //sinon, afficher : 
    } else {
        $message = 'C\'est difficile!!!';
    } ?> 
    <p><?php echo $message; ?><p>
</body>
</html>