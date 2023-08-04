<?php
$Magnitude = '5';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>PHP exo 4</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <img class="imgLogo col-3" src="./public/assets/img/PHP-logo.png" alt="Logo PHP">
            <h1 class="col-7">Exercice 4</h1>
            <p>L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement
                de terre. Cette échelle va de 1 à 9.
                Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.<br>
                Magnitude Phrase
                1 Micro-séisme impossible à ressentir.<br>
                2 Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.<br>
                3 Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.<br>
                4 Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.<br>
                5 Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments
                présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.<br>
                6 Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de
                l'épicentre.<br>
                7 Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la
                distance.<br>
                8 Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de
                kilomètres.<br>
                9 Séisme capable de tout détruire sur une très vaste zone.<br>
                Gérer tous les cas.<br>
                Utilser autre chose que des if else.</p>
        </div>
    </header>
    <main class="container-fluid">
        <div class="row">
            <div class="results position-absolute top-100 start-50 translate-middle ">
                <p><?php
                switch ($Magnitude){
                    case 1:
                        echo "Micro-séisme impossible à ressentir.";
                    break;
                    case 2:
                        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
                    break;
                    case 3:
                        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
                    break;
                    case 4:
                        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
                    break;
                    case 5:
                        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments
                        présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
                    break;
                    case 6:
                        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de
                        l'épicentre.";
                    break;
                    case 7:
                        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la
                        distance.";
                    break;
                    case 8:
                        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de
                        kilomètres.";
                    break;
                    case 9:
                        echo "Séisme capable de tout détruire sur une très vaste zone.";
                    break;
                    default:
                        echo "Ce chiffre n'est pas valide!";
                }

                ?></p>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>