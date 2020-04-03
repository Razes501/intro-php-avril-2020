<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo $_POST['nom_page']?></title>
</head>
<body>
    <?php var_dump($_POST); 
          var_dump($_FILES['photo']['tmp_name']);?>

          
    <h1><?php  echo $_POST['titre_page']?></h1>
    <p><?php  echo $_POST['texte_page']?></p>
    
    

    <?php
        if (isset($_FILES['photo']['tmp_name'])) {
        $retour = copy($_FILES['photo']['tmp_name'], $_FILES['photo']['name']);
            if($retour) {
                echo '<p>La photo a bien été envoyée.</p>';
                echo '<img src="' . $_FILES['photo']['name'] . '">';
            }
    }
?>
    


    
</body>
</html>