<?php

require_once 'db_connectie.php';
function dataOphalen()
{
    $db = maakVerbinding();
    $genrenaam = 'jazz';
    if (isset($_GET['genrenaam'])) {
        $genrenaam = htmlspecialchars($_GET['genrenaam']);
    }


    $query =
        /*"select stuknr, titel, genrenaam, niveaucode from stuk"*/
        /**"select Componist.naam as componist, format (geboortedatum, 'dd/MMMM/yyyy') as geboortedatum , Muziekschool.naam as muziekschool, plaatsnaam
        from Componist left outer join Muziekschool
        on Componist.schoolId = Muziekschool.schoolId" */
        "select *
from Stuk
where genrenaam = :genrenaam ";


    $data = $db->prepare($query);
    $data->execute(['genrenaam' => $genrenaam]);
    return $data;
}
function tabelOpmaken($data)
{
    $stuk_table = "<table>";
    $stuk_table = $stuk_table . '<tr><th>stuknr</th><th>componistId</th><th>ti  tel</th><th>stuknrOrigineel</th><th>genrenaam</th><th>niveaucode</th><th>speelduur</th><th>jaartal</th></tr>';

    foreach ($data as $rij) {
        $stuknr = $rij["stuknr"];
        $componistId = $rij["componistId"];
        $titel = $rij["titel"];
        $stuknrOrigineel = $rij["stuknrOrigineel"];
        $genrenaam = $rij["genrenaam"];
        $niveaucode = $rij["niveaucode"];
        $speelduur = $rij["speelduur"];
        $jaartal = $rij["jaartal"];
        $stuk_table = $stuk_table . "<tr><td>$stuknr</td><td>$componistId</td><td>$titel</td><td>$stuknrOrigineel</td><td>$genrenaam</td><td>$niveaucode</td><td>$speelduur</td><td>$jaartal</td></tr>";

    }

    $stuk_table = $stuk_table . "</table>";
    return $stuk_table;
}

function genreDropdown($data){


}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td:first-child {
            width: 8em;

        }

        td:nth-child(2) {
            font-style: normal;
            text-align: left;
            width: 5rem;

        }

        th {
            text-align: left;

        }
    </style>
</head>

<body>
    <?= $stuk_table ?>

    <form action='preparedstatements.php' method='get'>
        <input type='text' name='genrenaam'>
        <input type='submit' value="Verzenden">
    </form>
</body>

</html>