<?php

/* 
    // Exo1
    echo "<h1>Exo1</h1>";
    $a = 12;
    $b = 10;
    $total = $a + $b;
    echo "<p>$total<p>";
    
    // Exo2
    echo "<h1>Exo2</h1>";
    $a = 5;
    $b = 3;
    $c = $a + $b;
    echo"<p>$a $b $c</p>";
    $a = 2;
    echo $a;
    $c = $b - $a;
    echo"<p>$a $b $c</p>";
    
    // Exo3
    echo "<h1>Exo2</h1>";
    $a = 15;
    $b = 23;
    echo"<p>$a $b</p>";
    $a = $b;
    $b = 15;
    echo "<p>$a $b</p>";

    //Exo4
    echo "<h1>Exo4</h1>";
    $prix = 10;
    $nombreArticle = 2;
    $TVA = 5;
    echo "<p>$prix $nombreArticle $TVA</p>";
    $total = $prix * $nombreArticle * $TVA;
    echo "<p>$total</p>";   
    */


    /*
function addition(int | float $a, int | float $b): int | float{
    return $a - $b;
};
echo addition(4, 6) . "<br>";

function arrondis(float $nombre): int{
    return round($nombre);
};
echo arrondis(8.68) . "<br>";

function valeurs(int | float $a, int | float $b, int | float $c): int | float{
    return $a + $b + $c;
};

echo valeurs(2, 2, 2) . "<br>";

function moyenne(int | float $a, int | float $b, int | float $c): int | float{
    $somme = $a + $b + $c;
    return $somme / 3;
};

echo moyenne(10, 5, 15). "<br>";

function ttc(int | float $prix, int | float $nombre, int | float $tva): string{
    $prixTTC = $prix * $nombre * ( ( $tva / 100 ) + 1 );
    return "Le montant TTC est de : ".$prixTTC. " valeur €.";
};

echo ttc(10,2,5);

*/

use function PHPSTORM_META\map;

function positif (int  | float $nombre){
    if ($nombre >= 0){
        return "true";
    } else if ($nombre <0){
        return "false";
    }
}
echo positif(8);
echo "<br>";
echo positif(-8);
echo "<br>";

function maximum(int  | float $nombre1,int  | float $nombre2,int  | float $nombre3): int | float {
    return max($nombre1,$nombre2,$nombre3);
};
echo maximum(4,8,2)."<br>";

function minimum(int  | float $nombre1,int  | float $nombre2,int  | float $nombre3): int | float {
    return min($nombre1,$nombre2,$nombre3);
};
echo minimum(4,8,2)."<br>";

function age(int  | float $nombre){
    if ($nombre >=6 and $nombre <=7){
        return "Poussin";
    } else if ($nombre >=8 and $nombre <=9){
        return "Pupille";
    } else if ($nombre >=10 and $nombre <=11){
        return "Minime";
    } else if ($nombre >= 12){
        return "Cadet";
    } 
}
echo age(6)."<br>";
echo age(9)."<br>";
echo age(10.5)."<br>";
echo age(13)."<br>";


$age = 6;
switch ($age) {
    case 6:
        echo "Poussin";
        break;
    case 7:
        echo "Poussin";
        break;
    case 8:
        echo "Pupille";
        break;
    case 9:
        echo "Pupille";
        break;
    case 10:
        echo "Minime";
        break;
    case 11:
        echo "Minime";
        break;
    case 12:
        echo "Cadet";
        break;
}

