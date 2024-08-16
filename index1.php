<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Données de la base de données</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<ul class="navbar-nav ms-auto py-4 py-lg-0">

<?php

    echo ' <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index1.php">Tableau des données</a></li>';
    echo ' <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php">Interrupteur</a></li>';
?>
</ul> 
    <div class="container">
        <h1>Données de la base de données</h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Valeurs</th>
                <th>Temps</th>
            </tr>
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
            
            // Récupérer les données de la table
            $sql = "SELECT id, valeurs, temps FROM test";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // Afficher les données
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["valeurs"]. "</td><td>" . $row["temps"]. "</td></tr>";
                }
            } else {
                echo "0 résultats";
            }
            $conn->close();
            ?>
        </table>
    </div>
</body>
</html>
