<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color : <?php echo $_GET["color"] ?>;
            }    
    </style>
</head>
<body>

    <?php
    $name = "Jojo l'asticot";
    ?>

    <h1>Hello my name is <?php echo $name ?> </h1>

    <?php 
        echo "nous somme le ";
        echo date ('d/m/Y');
    ?>

</body>
</html>