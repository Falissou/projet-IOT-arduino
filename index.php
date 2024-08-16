<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrôle de la lampe</title>
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
        <h1>Contrôle de la lampe</h1>
        <form method="post" action="base.php">
            <label for="on">Allumer</label>
            <input type="radio" id="on" name="lamp_state" value="on">
            <label for="off">Éteindre</label>
            <input type="radio" id="off" name="lamp_state" value="off">
            <button type="submit">Envoyer</button>
        </form>
    </div>
</body>
</html>
