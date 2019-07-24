<?php 
    session_start();
    // var_dump($_POST['nombre']); Je récupère mon nombre de personne

    $data = [
        'voyage1' => [
                'nom' => 'Île de Cthulhu',
                'desc' => 'Un endroit sympathique',
                'prix' => 1500
                ],
        'voyage2' => [
                'nom' => 'Dimension parallèle',
                'desc' => 'Un endroit moins sympathique',
                'prix' => 4000
                ],
        'excursion1' => [
                'nom' => 'Mon cul',
                'desc' => 'Un endroit sombre',
                'prix' => 2
                ],
        'excursion2' => [
                'nom' => 'Random excursion',
                'desc' => 'Je sais même pas où tu vas',
                'prix' => 50
                ]
        ];

$trip = $data[$_POST['type']];

$prix = $_POST['nombre']*$trip['prix'];

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
    <h1>Récapitulatif de votre demande</h1>
    Bonjour <?= $_SESSION['sexe']?> <?=$_SESSION['prenom']?> <?=$_SESSION['nom']?>
    Vous avez choisi <?= $_SESSION['type']==='excursion'?'une excursion :':'un voyage :'?> 
    <b><?= $trip['nom']?></b> au prix de <?= $trip['prix']?> par personne.
    Vous nous avez indiqué <?= $_POST['nombre']?> personne(s).
    Le montant total est de <?= $prix ?>
    <div class="retour"><a href="logout.php">Retour au formulaire</a></div>
    </div>
</body>
</html>