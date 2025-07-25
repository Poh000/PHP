<?php
    include "env.php";
    include "./utils/bdd.php";
    include "./model/categoryMod.php";
    include "./utils/utilitaire.php";

    $message = createCategory();

    function createCategory(): string{
        if(empty($_POST["nameCategory"])){
            return "Le champ non de catégorie est vide";
        }
        $nameCategory = sanitize($_POST["nameCategory"]);
        if (CategoryExist($nameCategory)){
            return "La categorie : ". $nameCategory ."existe";
        }
        return addCategory($nameCategory);
    }
    $categories = getAllCategory();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="nameCategory">
    <input type="submit" value="Ajouter" name="submit">
    </form>
    <p><?=$message?></p>
    <h2>Liste des catégories</h2>
    <?php foreach($categories as $category):?>
        <h3 id="<?= $category["id_category"] ?>"><?= $category["name"] ?></h3>
    <?php endforeach ?>
</body>
</html>