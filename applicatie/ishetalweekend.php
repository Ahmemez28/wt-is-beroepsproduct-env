<?php
$Dag = date_create("now")->format("w");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weekend</title>
</head>

<body>
    <h2>WEEKEND CHECK</h2>

    <?php

    if ($Dag < 3) {
        echo "Nee, nog lang niet.";
    }
    else if ($Dag < 5) {
        echo "Nog even wachten.";
    }
    elseif ($Dag == 5) {
        echo "Bijna!";
    } else {
        echo "Jaaaaa, het is weekend!";
    }

    ?>

</body>

</html>