<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur HTML</title>
</head>
<body>
    <header>
        <h1>Bienvenue sur le Générateur de page HTML</h1>
        <p>Veuillez remplir les champs pour créer une page HTML</p>
    </header>

    <div>
    <form method='POST' enctype='multipart/form-data'>
        <div>
            <label>Titre de la page</label>
            <input type='text' name='title'>
        </div>
        <div>
            <label>Nom du fichier</label>
            <input type='text' name='fileName'>
        </div>
        <div>
            <label>Texte de la page</label>
            <textarea name='text' rows="15" cols="25"></textarea>
        </div>
        <div>
            <label>Image</label>
            <input type='file' name="photo">
        </div>
        <div>
            <button type='submit' name='submit'>Valider</button>
        </div>
    </form>
    </div>

    <p> <?=$message?> </p>
    
</body>
</html>