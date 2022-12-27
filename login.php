<?php
    $nom = htmlspecialchars($_POST['nom']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $servername="localhost";
    $dbname="user";
    $username="seb";
    $password="12345678";
    //----------------------------------------------------------------

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sql = "select * from info WHERE nom='$nom' AND mdp='$mdp';";

    $connection = $conn->query($sql);

    $tab=$connection->fetchAll();
    if(count($tab)==1){
        echo "vous etes connectée";
    }
    else{
        echo "nom ou mots de passe incorrect ";
    }
}
catch (Exception $e){
    echo 'erreur :'. $e->getMessage();
}
?>