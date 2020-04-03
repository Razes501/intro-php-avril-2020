<!--*
inscription à un site

- email
- confirmation de l'email
- mot de passe
- confirmation du mot de passe

Règles de validation :
    - Les confirmation doivent être identiques aux informations données
    - l'e-mail doit être valide 
    - le mot de passe doit avoir plus de 5 caractères (fonction strlen)

Faire le formulaire, récupérer les données avec form input et faire la vérification

*/
-->


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription au site</title>
</head>
<body>

    <?php

    //récupération des données : je cherche une clé qui s'appelle submit
    $isPosted = filter_has_var(INPUT_POST, "submit");
    //est-ce que le formulaire est valide ? version optimiste
    $isValid = true;


    //récupérer les données la clé email + filtrer si c'est bien un mail
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    //ici aussi avec la clé emailConfirmation
    $emailConfirm = filter_input(INPUT_POST, "emailConfirm", FILTER_VALIDATE_EMAIL);


    $pwd = filter_input(INPUT_POST, "pwd", FILTER_DEFAULT);
    $pwdConfirm = filter_input(INPUT_POST, "pwdConfirm", FILTER_DEFAULT);


    //Validation des données
    $error = "";

    if($isPosted){
        
        //Validation de l'email : si l'email est faux le formulaire est faux et si l'email est différent de la confirmation c'est faux aussi
        if (! $email){
            $isValid = false;
        } else if ($email != $emailConfirm){
            $isValid = false;
        }
    
        //Validation du mot de passe : sa taille en premier et que le mdp et sa confirmation soit identique
        if (mb_strlen($pwd)<= 5){
            $isValid = false;
        } else if ($pwd != $pwdConfirm){
            $isValid = false;
        }
    
        //Définition du message d'erreur
        if (! $isValid){
            $error = "La saisie est invalide, veuillez corriger.";
        }
    }

    

    ?>


    <?php if (! $isPosted || ! $isValid) :?>
        <p><?= $error?>
        <form method="POST">
            <div>
                <label>Votre e-mail</label>
                <input type="email" name="email">
            </div>

            <div>
                <label>Confirmez votre e-mail</label>
                <input type="email" name="emailConfirm">
            </div>

            <div>
                <label>Mot de Passe</label>
                <input type="password" name="pwd">
            </div>

            <div>
                <label>Confirmez votre Mot de Passe</label>
                <input type="password" name="pwdConfirm">
            </div>

            <button type="submit" name="submit">Envoyer</button>
        </form>
    <?php else: ?>
        <p>Merci de votre inscription</p>
    <?php endif?>
    
</body>
</html>

