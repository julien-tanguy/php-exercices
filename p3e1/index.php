<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e1p3</title>
</head>
<body>

    <p><?php
    $number = 0;
    //tant que $number est < 10, executer le code.
    while ($number <= 10) {
        //test creer element p qui a pour valeur $number en php.
        // $newligne = DOMDocument::createElement ('p');
        // DOMElement::$nodeValue = $number;
        echo 'la valeur de number est de : ' . $number . '<br>';
        $number++;
    }
    ?></p>
</body>
</html>