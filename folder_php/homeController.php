<?php
ob_start();

$name = "Béatrice";


//lecture d'un fichier json
$data = file_get_contents("data/persons.json");
$persons = json_decode($data, true);

var_dump($persons);


//Traitement du formulaire des messages
$isPosted = filter_has_var(INPUT_POST, "submit");
if ($isPosted){
    $text = filter_input(INPUT_POST, "messageText", FILTER_SANITIZE_STRING);
    if(! empty($text)){
        file_put_contents("data/messages.txt", "\n$text", FILE_APPEND | LOCK_EX);
    }
}

//Traitement du formulaire des personnes
$isPersonPosted = filter_has_var(INPUT_POST, "submitPerson");
if($isPersonPosted){
    //récupération de la saisie
    $personName = filter_input(INPUT_POST, "personName", FILTER_SANITIZE_STRING);
    $personAge = filter_input(INPUT_POST, "personAge", FILTER_SANITIZE_NUMBER_INT);
    //controle de la saisie
    if(! empty($personName) && !empty($personAge)){
        //création d'une nouvelle personne
        $newPerson = ["name" => $personName, "age" => $personAge];
        //ajout de la nouvelle personne au tableau json
        array_push($persons, $newPerson);
        //enregistrement du nouveau tableau dans le fichier
        file_put_contents("data/persons.json", json_encode($persons));
    }
}

var_dump(glob("*.php"));

//Lecture du fichier texte
$messages = file_get_contents("data/messages.txt");
$messages = nl2br($messages);

require "view/home.php";


$pageContent = ob_get_content();

file_put_content("test.html", $pageContent);

echo $pageContent;