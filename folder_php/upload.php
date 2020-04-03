<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        function processUpload () {
            $basePath = getcwd()."/img/";
                    $fileName = uniqid().".jpg";

                    if(move_uploaded_file($_FILES["photo"]["tmp_name"], $basePath.$fileName)){
                        $message = "Votre envoie a été enregistré";
                    }   else {
                        $error = "Impossible de déplacer le fichier";
                    }
        }


        //exemple de fonction ini_set qui vient modifier le comportement initial de php
        //ici la fonction permet de passer le temps d'execution max d'un script à 1heure
        ini_set("upload_execution_time", "3600");

        //donnée texte
        var_dump($_POST);
        //donnée binaire pour les fichiers exemple image
        var_dump($_FILES);

        // $isPosted = est-ce que la clé submit est présente dans la collection input_post ?
        $isPosted = filter_has_var(INPUT_POST,"submit");
        $hasUpload = !empty($_FILES["photo"]["tmp_name"]);


        $error = "";

        //Traitement de l'upload si les données ont été postées (isPosted) et qu'il y a un fichier transmis (hasUpload)
        if($isPosted && $hasUpload){
            if($_FILES["photo"]["type"]!= "image/jpeg" || $_FILES["photo"]["error"] != "0"){
                $error = "Impossible de traiter le fichier";
            }   else {
                    processUpload();
            }
        }

    ?>

    <p><?= $error ?></p>



    <!-- multipart/form-data obligatoire pour pouvoir envoyer des fichiers -->
    <form method="post" enctype="multipart/form-data">
        <label>Choisissez un fichier à envoyer</label>
        <input type="file" name="photo">

        <button type="submit" name="submit">Envoyer</button>
    
    </form>

    <?php if (empty($error)&& ! empty($message)) : ?>
        <p><?= $message ?></p>
        <img src="/img/<?=$fileName?>">
    <?php endif ?>
    
</body>
</html>