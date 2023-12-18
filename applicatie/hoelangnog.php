<?php
$datum=$_GET['datum'];
$Sinterklaas=date_create("$datum");
$Tijd=date_create("now");
$verschil=date_diff($Sinterklaas,$Tijd);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinter</title>
</head>
<body>
    <h1>HAA</h1>
    <?php

    echo "Het duurt nog ".$verschil->format("%a"). " dagen en ".$verschil->format("%h"). " uur tot ".$_GET['omschrijving'];
    ?>
</body>
</html>