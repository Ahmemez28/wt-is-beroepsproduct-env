<?php

$eenTMTien = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$zesTMVijftien = [6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
$samengevoegd = array_merge($eenTMTien, $zesTMVijftien);
$film = [
    "titel" => "Recep Ivedik 7",
    "jaar" => "2022",
    "regisseur" => "Recep Tayyip Erdogan",
    "hoofdrolspelers" => "Ben"
];

function arrayPrinten($Menu)
{
    $filter = "";

    if (isset($_GET['gerecht'])) {
        $filter = $_GET['gerecht'];
    }

    foreach ($Menu as $MenuItem => $MenuGerechten) {
        if ($filter == $MenuItem || empty($filter)) {
            echo "<h2> " . $MenuItem . ": </h2>";
            foreach ($MenuGerechten as $Menugerecht => $MenuPrijs) {
                $MenuPrijs = number_format($MenuPrijs, 2, ",", "");
                echo "<p > $Menugerecht: &euro; $MenuPrijs </p> ";
            }
        }
    }
}

$Menu = [
    "Eten" => [
        "Shoarma" => 6.95,
        "Appels" => 10.95,
        "Tabouleh" => 8.95,
        "Hamburger" => 5.50
    ],
    "Drinken" => [
        "Cola" => 2.00,
        "Ayran" => 2.30,
        "Fernandes" => 2.50,
        "Bier" => 5.50
    ]
    ,
    "Toetjes" => [
        "Ijs" => 2.00,
        "SuperIjs" => 20.30,
        "SuperDuperIjs" => 200.50,
        "Z3NC1-IJS" => 2000.00
    ]
]; 





?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>PHP voorbeeld</title>

</head>

<body>
    <h1>OBL MENU</h1>
    <form action="array.php" method="get">
        <input type="radio" id="eten" name="gerecht" value="Eten">
        <label for="eten">Eten</label><br>
        <input type="radio" id="drinken" name="gerecht" value="Drinken">
        <label for="drinken">Drinken</label><br>
        <input type="radio" id="toetjes" name="gerecht" value="Toetjes">
        <label for="toetjes">Toetjes</label>
       
        <input type="submit" value="Filteren">

    </form>
   <?php 
   arrayPrinten($Menu);
   ?>
</body>

</html>