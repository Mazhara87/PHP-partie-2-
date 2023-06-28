<?php
$age = 20;

if ($age >= 18) {
    echo "Vous êtes majeur.";
} else {
    echo "Vous êtes mineur.";
}
// ex 2 method 1
?>
<?php
$isEasy = true; 

if ($isEasy) {
    echo "C'est facile!!";
} else {
    echo "C'est difficile !!!";
}
?>


<?php
// ex 2 method 2
$isEasy = false; 

echo $isEasy ? "C'est facile!!" : "C'est difficile !!!";
?>


<?php
// ex 3
$age = 25; 
$gender = 'Femme'; 

if ($gender == 'Homme') {
    if ($age >= 18) {
        echo "Vous êtes un homme et vous êtes majeur.";
    } else {
        echo "Vous êtes un homme et vous êtes mineur.";
    }
} elseif ($gender == 'Femme') {
    if ($age >= 18) {
        echo "Vous êtes une femme et vous êtes majeure.";
    } else {
        echo "Vous êtes une femme et vous êtes mineure.";
    }
} else {
    echo "Genre non reconnu.";
}
?>


<?php
// ex 4
$magnitude = 7;

switch ($magnitude) {
    case 1:
        echo "Micro-séisme impossible à ressentir.";
        break;
    case 2:
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break;
    case 3:
        echo "Ne cause pas de dégâts mais commence à pouvoir être légèrement ressenti.";
        break;
    case 4:
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégâts.";
        break;
    case 5:
        echo "Séisme capable d'engendrer des dégâts importants sur de vieux bâtiments ou des bâtiments présentant des défauts de construction. Peu de dégâts sur des bâtiments modernes.";
        break;
    case 6:
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
        break;
    case 7:
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        break;
    case 8:
        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        break;
    case 9:
        echo "Séisme capable de tout détruire sur une très vaste zone.";
        break;
    default:
        echo "Magnitude non valide.";
}
?>

<?php
// ex5
$gender = 'Femme'; 

if ($gender != 'Homme') {
    echo "C'est une développeuse !!!";
} else {
    echo "C'est un développeur !!!";
}
?>




<?php
// ex6
$age = 20; 

if ($age >= 18) {
    echo "Tu es majeur.";
} else {
    echo "Tu n'es pas majeur.";
}
?>

<?php
// ex7
$isOk = false;

if ($isOk == false) {
    echo "C'est pas bon !!!";
} else {
    echo "C'est ok !!";
}
?>
