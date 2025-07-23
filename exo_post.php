<?php
    $message = "";
    if(isset($_POST["submit"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"]) && !empty($_POST["mdp"]) && !empty($_POST["mdpVerif"])){
        if ($_POST["mdp"] === $_POST["mdpVerif"]){
            if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                $message = "Compte ajouté";
            } else {
                $message = "L'email n'est pas un email";
            }
        }   else {
            $message = "les mots de passe ne correspondent pas";
        }
    } else {
        $message = "Tous les champs ne sont pas remplis";
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="nom">Nom: </label>
        <input type="text" name="nom" ><br>
        <label for="prenom">Prenom: </label>
        <input type="text" name="prenom" ><br>
        <label for="email">Email: </label>
        <input type="text" name="email"><br>
        <label for="mdp">Mot de passe: </label>
        <input type="text" name="mdp" ><br>
        <label for="mdpVerif">Confirmer le mot de passe: </label>
        <input type="text" name="mdpVerif" ><br>
        <input type="submit" value="Envoyer" name="submit"><br>
    </form>

    <p>
        <?=$message?>
    </p>
</body>
</html> 