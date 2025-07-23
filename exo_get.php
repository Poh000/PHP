
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="" method="GET">
        <label for="nombreA">Nombre 1:</label>
        <input type="number" name="nombreA" required>
        <label for="nombreB">Nombre 2:</label>
        <input type="number" name="nombreB" required>
        <input type="submit" value="envoyer" name="submit">
    </form>
    
        <form action="" method="GET">
        <label for="prixHT">Prix HT:</label>
        <input type="number" name="prixHT" required>
        <label for="nombre">Nombre d'articles:</label>
        <input type="number" name="nombre" required>
        <label for="tva">Taux de tva:</label>
        <input type="number" name="tva" required>
        <input type="submit" value="envoyer" name="submit1">
    </form>
</body>
</html>
<?php
    if (isset($_GET["submit"]) && !empty($_GET["nombreA"]) && !empty($_GET["nombreB"]) ) {
            if (is_numeric($_GET["nombreA"]) && is_numeric($_GET["nombreB"])) {
                echo "la somme est ".$_GET["nombreA"]+$_GET["nombreB"];
            }
    }

    if (isset($_GET["submit1"]) && !empty($_GET["prixHT"]) && !empty($_GET["nombre"]) && !empty($_GET["tva"])) {
            if (is_numeric($_GET["nombre"]) && is_numeric($_GET["prixHT"]) && is_numeric($_GET["tva"])) {
        echo "Le prix TTC est égal à ".($_GET["prixHT"]*$_GET["nombre"])*(($_GET["tva"] / 100)+1);
        }
    }

