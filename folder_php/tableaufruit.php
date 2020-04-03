<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- On veut une liste select dans laquelle les options sont fourni par un tableau php. 
On créer d'abord le tableau
Et ensuite on crée une boucle en php toujours pour les <option> du <select> -->
    <?php $fruit =['fraise', 'mûre', 'framboise', 'cerise', 'groseille'];?>


<!-- solution 1 que j'ai trouvé moi même-->
    <select name="fruit">

            <?php for ($i=0; $i<count($fruit); $i++): ?> 

                <option> <?php echo $fruit[$i] ?> </option>
            
            <?php endfor?>
         
    </select>  


<!-- solution 2-->
    <select>
        <?php foreach($fruits as $item): ?>
            <option><?=$item?></option>
        <?php endforeach?>


    </select>
</body>
</html>

