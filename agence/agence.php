<?php 
session_start();

if(!isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['type']) || !isset($_POST['sexe']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['type']) || empty($_POST['sexe'])){
    header('Location: formulaire.php');
}

$sexe = $_POST['sexe'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

$_SESSION['sexe'] = $sexe;
$_SESSION['nom'] = $nom;
$_SESSION['prenom'] = $prenom;

$_SESSION['type'] = $_POST['type'];
$_SESSION['type'] = $_POST['type'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form action="recap.php" method="POST">

        <?php if($_POST['type'] === 'excursion'): ?>
            <label for="exc">Choix d'excursion</label>
                <select name="type" id="exc">
                    <option selected value="excursion1">Mon cul - Un endroit sombre - 2 euros/pers</option>
                    <option value="excursion2">Random Excursion - Je sais même pas où tu vas - 50 euros/pers</option>
                </select>
        <?php else: ?>
            <label for="voy">Choix voyage</label>
                    <select name="type" id="voy">
                        <option selected value="voyage1">Île de Cthulhu - Un endroit sympathique - 1500 euros/pers</option>
                        <option value="voyage2">Une dimension parallèle - Un endroit moins sympathique - 4000 euros/pers</option>
                    </select>
        <?php endif; ?>
            <br>
            <label for="nombre">Nombres de personnes</label>      
            <input id="nombre" name="nombre" type="number" min="1" required>
            <br>
            <button type="submit">Estimation</button>


    </form>
    </div>
</body>
</html>