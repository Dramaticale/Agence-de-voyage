<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Agence de voyage Arkham</title>
</head>
<body>
    <div class="container">
        <form action="agence.php" method="POST">

            <label for="sexe">Civilité</label>
            <select name="sexe" id="sexe" >
                <option disabled selected value="">Votre sexe</option>
                <option value="M.">M.</option>
                <option value="Mme.">Mme.</option>
                <option value="">Autre</option>
            </select>
            <br>
            <label for="nom">Nom :</label>      
            <input id="nom" name="nom" type="text" >
            <br>
            <label for="prenom">Prénom :</label>      
            <input id="prenom" name="prenom" type="text" >
            <br>
            <label for="v">Voyage :</label>
            <input type="radio" name="type" id="v" value="voyage" >
            <br>
            <label for="e">Excursion :</label>
            <input type="radio" name="type" id="e" value="excursion">
            <br>
            <button type="submit">Suite</button>
        
        </form>
    </div>
</body>
</html>