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
        echo "Poussin"."<br>";
        break;
    case 7:
        echo "Poussin"."<br>";
        break;
    case 8:
        echo "Pupille"."<br>";
        break;
    case 9:
        echo "Pupille"."<br>";
        break;
    case 10:
        echo "Minime"."<br>";
        break;
    case 11:
        echo "Minime"."<br>";
        break;
    case 12:
        echo "Cadet"."<br>";
        break;
}


function compteur($nombre){
    for ($i = 1; $i<=$nombre; $i++ ){
        echo $i."<br>";
    }
}
compteur(5);

function suivant($nombre){
    $n10=$nombre+10;
    while ($nombre != $n10){
        $nombre ++;
        echo $nombre."<br>";
    }
}
suivant(17);

function table($nombre){
    for ($i = 0; $i <=10; $i++){
        $resultat = $i*$nombre;
        echo "$i x $nombre = $resultat"."<br>";
    }
}
table((2));

function tabmax($tab){
    $maximum = 0;
    for ($i = 0; $i<count($tab);$i++){
        if ($tab[$i] > $maximum) {
            $maximum = $tab[$i];
        }
    }
    return $maximum;
}
echo tabmax([5,10,13,1])."<br>";

function tabmoy($tab){
    $somme = 0;
    for ($i = 0; $i<count($tab);$i++){
        $somme += $tab[$i];
    }
    return $somme/count($tab);
}
echo tabmoy([10,20,15,15,8])."<br>";

function tabmin($tab){
    $minimum = $tab[0];
    for ($i = 0; $i<count($tab);$i++){
        if ($tab[$i] < $minimum) {
            $minimum = $tab[$i];
        }
    }
    return $minimum;
}
echo tabmin([5,10,13,1])."<br>";

function tabminAbs($tab){
    $minimum = abs($tab[0]);
    for ($i = 0; $i<count($tab);$i++){
        if (abs($tab[$i]) < $minimum) {
            $minimum = abs($tab[$i]);
        }
    }
    return $minimum;
}
echo tabminAbs([-5,10,13,-10])."<br>";

function comptTab($tab){
    $compteurPos = 0;
    $compteurNeg = 0;
    for ($i = 0; $i<count($tab);$i++){
        if ($tab[$i] >= 0){
            $compteurPos +=1;
        } else if ($tab[$i] < 0){
            $compteurNeg +=1;
        }
    }
    return "il y a $compteurPos valeurs positives et $compteurNeg valeurs négatives dans le tableau."."<br>";
}
echo comptTab([-1,-2,-3,1,2,3]);

function tri($tab){
    for ($i = 0; $i< count($tab);$i++){
        $mini= $i;
        for ($j = $i+ 1; $j< count($tab);$j++){
            if ($tab[$j]<$tab[$mini]){
                $mini= $j;
            }
        }
        $temp = $tab[$i];
        $tab[$i]=$tab[$mini];
        $tab[$mini]=$temp;
    }
    return $tab;
}
print_r(tri([25,33,11,6,21,96,38,6,4]));
echo "<br>";

function note ($tab){
    $maximum = $tab[0]["notes"];
    for ($i = 0; $i<count($tab);$i++){
        if ($tab[$i]["notes"]>$maximum) {
            $maximum = $tab[$i]["notes"];
            $indiceI = $i;
        }
    }
    return $tab[$indiceI]["prénom"]." ".$tab[$indiceI]["nom"]." ".$tab[$indiceI]["notes"]."<br>";
}

echo note([
            ["prénom"=>"Jean", "nom"=> "albert", "notes"=> 10],
            ["prénom"=>"Marie", "nom"=> "durand", "notes"=> 14],
            ["prénom"=>"Clément", "nom"=> "dupond", "notes"=> 18],
            ["prénom"=>"Julien", "nom"=> "severac", "notes"=> 15],
            ["prénom"=>"Sophie", "nom"=> "lebon", "notes"=> 16]
]);


function noteMin ($tab){
    $minimum = $tab[0]["notes"];
    for ($i = 0; $i<count($tab);$i++){
        if ($tab[$i]["notes"]<$minimum) {
            $minimum = $tab[$i]["notes"];
            $indiceI = $i;
        }
    }
    return $tab[$indiceI]["prénom"]." ".$tab[$indiceI]["nom"]." ".$tab[$indiceI]["notes"]."<br>";
}

echo noteMin([
            ["prénom"=>"Jean", "nom"=> "albert", "notes"=> 10],
            ["prénom"=>"Marie", "nom"=> "durand", "notes"=> 14],
            ["prénom"=>"Clément", "nom"=> "dupond", "notes"=> 18],
            ["prénom"=>"Julien", "nom"=> "severac", "notes"=> 15],
            ["prénom"=>"Sophie", "nom"=> "lebon", "notes"=> 16]
]);