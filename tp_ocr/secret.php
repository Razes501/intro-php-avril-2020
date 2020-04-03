<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //echo $_POST['password'];
    if($_POST['password']=='kangourou'){

        echo('Accès autorisé. Les codes nucléaires sont : Hiroshima1945');

    } else {

        echo('Accès refusé. On a envoyé le FBI chez toi, mec');
    }
    
    ?>
</body>
</html>