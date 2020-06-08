<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>php - e5p1</title>
    </head>
    <body>
        <p><?php 
            //une variable définis comme NULL n'affichera rien. Pour definir une variable mais ne rien lui donner
            $number = NULL; 
            echo ($number);?></p>
        <p><?php $number = 4; 
            echo ($number); ?></p>
    </body>
</html>