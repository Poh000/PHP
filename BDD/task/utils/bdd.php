<?php
function connectBDD() {
    return $bdd = new PDO('mysql:host=' . BDD_SERVER . ';dbname=' . BDD_NAME .'',
     BDD_lOGIN,
     BDD_PASSWORD, 
     [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
}
