<?php 
/*
* Obtenir un nombre (GET) de l'utilisateur 
* Si le nombre est un multiple de 5 afficher fiz
* Si le nombre est un multiple de 3 afficher buz
* Si le nombre est un multiple de 3 et 5 afficher fizbuz
* Sinon afficher le nombre

$nombre % 3 == 0 => divisible par 3
*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //récupérer la saisie
        $number = $_GET["n"]?? 0;

        //définir le résultat, ça sera une chaine de caractere
        $result = "";

        if($number % 5 == 0) {
            $result = "FIZ";
        }

        if($number % 3 == 0) {
            $result = $result . "BUZ";
        }

        echo ($result=="")? $number:$result;
    ?>
    

</body>
</html>