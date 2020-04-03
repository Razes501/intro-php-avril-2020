<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //on crée la fiche d'une personne
        $person = [
            "nom"       => "Brahé",
            "prenom"    => "Tycho",
            "salaire"   => 56500,
            "fonction"  => "Lead dev"
        ];


    ?>

<!-- Liste déroulantes des attributs d'une personne-->
    <select>
        <?php foreach($person as $key): ?>
            <option><?= $key ?></option>
        <?php endforeach ?>
    </select>


    <table>
        <?php foreach($person as $key => $val): ?>
            <tr>
                <td> <?= $key ?></td>
                <td> <?= $val ?></td>
            </tr>
        <?php endforeach ?>
    </table>


</body>
</html>