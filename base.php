<?php
// Connexion à la base de données
$servername = "mysql-falissou.alwaysdata.net";
$username = "falissou";
$password = "Falis6252";
$dbname = "falissou_tp_iot";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Vérifier si des données ont été soumises
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer l'état de la lampe depuis le formulaire
    $lamp_state = $_POST["lamp_state"];

    // Insérer l'état de la lampe dans la base de données
    $sql = "INSERT INTO test_on_off (valeur) VALUES ('$lamp_state')";
    
    if ($conn->query($sql) === TRUE) {
        echo "L'état de la lampe a été mis à jour avec succès.";
    } else {
        echo "Erreur lors de la mise à jour de l'état de la lampe: " . $conn->error;
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>
