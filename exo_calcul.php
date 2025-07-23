<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="nombre">Nombre 1: </label>
        <input type="number" name="nombre"><br>
        <label for="nombre2">Nombre 2: </label>
        <input type="number" name="nombre2"><br>
        <label for="op">Opérateur : </label>
        <input type="text" name="op"><br>
        <input type="submit" value="Envoyer" name="submit"><br>
    </form>

    <p>
        <?= $message ?>
    </p>
</body>

</html>

<?php
$message = "";
if (isset($_POST["submit"])) {
    if (!empty($_POST["nombre"]) && ($_POST["nombre2"]) != "" || !empty($_POST["nombre2"]) && !empty($_POST["op"])) {
        if (is_numeric($_POST["nombre"]) && is_numeric($_POST["nombre2"])) {
            if ($_POST["op"] === "add") {
                echo $_POST["nombre"] . " + " . $_POST["nombre2"] . " = " . $_POST["nombre"] + $_POST["nombre2"];
            } else if ($_POST["op"] === "sous") {
                echo $_POST["nombre"] . " - " . $_POST["nombre2"] . " = " . $_POST["nombre"] - $_POST["nombre2"];
            } else if ($_POST["op"] === "multi") {
                echo $_POST["nombre"] . " * " . $_POST["nombre2"] . " = " . $_POST["nombre"] * $_POST["nombre2"];
            } else if ($_POST["op"] === "div") {
                if ((int)$_POST["nombre2"] == 0){
                    echo "Division par 0 impossible";
                } else {
                    echo $_POST["nombre"] . " / " . $_POST["nombre2"] . " = " . $_POST["nombre"] / $_POST["nombre2"];
                }
            } else {
                echo "Opérateur non valide";
            }
        }
    } else {
        echo "Manque des valeurs";
    }
} else {
    echo "Form non soumis";
}
?>