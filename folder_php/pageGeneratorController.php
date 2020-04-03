<?php

//Les données sont elles postées
    //ispoted pour les données text 
$isPosted = filter_has_var(INPUT_POST, 'submit');
    //hasupload pour l'image
$hasUpload = isset($_FILES["photo"]["tmp_name"]);


//message de succès ou d'erreur (au départ une chaine vide)
$message="";

//Initialisation du test de l'upload
$uploadOk = false;



if($isPosted){
    //récupération des données sous forme de variable
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $text = filter_input(INPUT_POST, "text", FILTER_SANITIZE_STRING);
    $fileName = filter_input(INPUT_POST, "fileName", FILTER_SANITIZE_STRING);
    var_dump($_POST);


    //traitement du fichier téléchargé
    if($hasUpload){
        var_dump($_FILES);
        $upload = $_FILES["photo"];
        $isValid = $upload["type"] == "image/jpeg" && $upload["error"] == "0";
        $filePath = "img/".uniqid("photo_").".jpg";
        if($isValid){
            $uploadOk = move_uploaded_file($upload["tmp_name"], $filePath);
            if($uploadOk){
                $message="Envoie réussi";
            } else {
                $message="Echec de l'envoie";
            }
        }
    }




    if($uploadOk){
        $img = "<img src=\"../$filePath\">";
    } else {
        $img = "";
    }

    //Génération du code html de la page sans image
    $htmlCode = "<html><body><h1>$title</h1>$img<p>$text</p></body></html>";

    //Enregistrement de la page grace a la fonction dans un dossier sorties qui accueillera une page .html
    $fileOk = file_put_contents("sorties/$fileName.html", $htmlCode);
    if($fileOk){
        $message .= "Enregistrement réussi <a href='/folder_php/sorties/$fileName.html'> Lien vers la page</a>";
    } else {
        $message .= "Echec de l'enregistrement ";
    }
}


require 'view/pageGenerator.php';

