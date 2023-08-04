<?php
// $homme = '10';
$gender = 'homme';
$age = '19';
if ($gender = 'femme' ){ $resultGender = 'Vous êtes une femme!';} elseif ($gender = 'homme' ) { $resultGender = 'Vous êtes un homme!';} else { $resultGender = 'Entrez un genre valide!';} 
if ($age < 0 || $age > 100){ $result = "Entrez un age valide";} else {if ($age >= 18){ $result = 'Vous êtes majeur!';} else { $result = 'Vous êtes mineur!';} }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>PHP exo 3</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <img class="imgLogo col-3" src="./public/assets/img/PHP-logo.png" alt="Logo PHP">
            <h1 class="col-7">Exercice 3</h1>
            <p>Créer deux variables age et gender. La variable gender peut prendre comme valeur :
Homme
Femme


En fonction de l'âge et du genre afficher la phrase correspondante :

Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeure
Vous êtes une femme et vous êtes mineur  


Gérer tous les cas.  </p>
        </div>
    </header>
    <main class="container- fluid">
        <div class="row">
            <div class="results position-absolute top-50 start-50 translate-middle ">
            <p><?php echo "$result $resultGender" ;?> </p>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>