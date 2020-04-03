<?php
include "libraries/tools.php";


echo htmlTag("div", "Hello", ["style" => "color:red"]);
echo htmlTag(
    "img", "", 
    [
        "src" => "img/5e833a4ac7bf7.jpg", 
        "alt" => "texte alternatif"
    ], 
    true
);


echo linkTag(
    "formulaire_age.php",
    "Lien vers le formulaire",
    []

);
