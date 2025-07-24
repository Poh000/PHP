<?php
//importer le fichier bdd.php
include "../utils/bdd.php";

//ajouter une category (objet de connexion et le contenu de la catégorie)
function addCategory(string $name) {

    try {
        $request = "INSERT INTO category(`name`) VALUES (?)";
        //Ecrire toutes les étapes de la requêtes 
        //1 préparer la requête
        $req = connectBDD()->prepare($request);
        //2 Bind les paramètres
        $req->bindParam(1, $name, PDO::PARAM_STR);
        //3 executer la requête
        $req->execute();

    //Capture des erreurs 
    } catch(Exception $e) {
        echo $e->getMessage();
    }

}

function getAllCategory() {
    try {
        $request = "SELECT c.id_category, c.name FROM category AS c";
        $req = connectBDD()->prepare($request);
        $req->execute();
        $category =  $req->fetchAll(PDO::FETCH_ASSOC);
        return $category;
    }
    catch(Exception $e) {
        $e->getMessage();
    }
}
echo "<pre>";
print_r (getAllCategory());
echo "</pre>";

function updateCategory(int $id, string $name) {
    try {
        $request = "UPDATE category SET name = (?) WHERE id_category = (?);";
        $req = connectBDD()->prepare($request);
        $req->bindParam(1, $name, PDO::PARAM_STR);
        $req->bindParam(2, $id, PDO::PARAM_INT);
        $req->execute();

    //Capture des erreurs 
    } catch(Exception $e) {
        echo $e->getMessage();
    }

}

updateCategory(1,"LoickLeCaca");

function deleteCategory(int $id) {
    try {
        $request = "DELETE FROM category WHERE id_category = (?)";
        $req = connectBDD()->prepare($request);
        $req->bindParam(1, $id, PDO::PARAM_INT);
        $req->execute();
    //Capture des erreurs 
    } catch(Exception $e) {
        echo $e->getMessage();
    }

}

deleteCategory(4);