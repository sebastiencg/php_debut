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
    $sql = "select * from info ;";

    $connection = $conn->query($sql);


    while ($ligne = $connection->fetch()) {
        foreach ($ligne as $value){
            echo " $value" ;
        }
        echo "<br>";

    }


}
catch (Exception $e){
    echo 'erreur :'. $e->getMessage();
}
?>
