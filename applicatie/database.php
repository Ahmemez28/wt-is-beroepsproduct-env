<?php
require_once 'db_connectie.php';

// maak verbinding met de database (zie db_connection.php)


// haal alle componisten op en tel het aantal stukken


$query = 'SELECT  S.componistId as ComponistID,S.titel as Titel,S.stuknr as StukNummer, N.niveaucode as NiveauCode,
N.omschrijving as Omschrijving
From  Stuk as S LEFT OUTER JOIN Niveau as N ON N.niveaucode=S.niveaucode;';

function dataOphalen()
{
    $db = maakVerbinding();
    $query = "SELECT C.naam as Naam, FORMAT(C.geboortedatum,'dd - MMM - yyyy') as Geboortedatum, 
    M.naam as Muziekschool, M.plaatsnaam as Plaats from Componist as C LEFT OUTER JOIN Muziekschool as M 
    ON C.schoolID=M.schoolID ";
    $data = $db->query($query);
    return $data;
}

function applicatieData()
{
    $html_table = '<table>';
    $html_table = $html_table . '<tr><th>Naam</th><th>Geboortedatum</th><th>Muziekschool</th><th>Plaats</th></tr>';
    $data = dataOphalen();
    while ($rij = $data->fetch()) {
        $kolom1 = $rij['Naam'];
        $kolom2 = $rij['Geboortedatum'];
        $kolom3 = $rij['Muziekschool'];
        $kolom4 = $rij['Plaats'];
        $html_table = $html_table . "<tr><td>$kolom1</td><td> $kolom2 </td><td>$kolom3</td><td>$kolom4</td></tr>";
    }
    $html_table = $html_table . "</table>";
    return $html_table;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table,
        td,
        th {
            text-align: center;
            padding: 0px 2px 0px 5px;
            border: 1px solid black;
        }

        table {

            display: flex;
            justify-content: center;
        }


        td {

            padding: 1rem;

        }
    </style>
    <title>Componisten stukken</title>
</head>

<body>
    <h1>Test Database</h1>
    <?php
    echo applicatieData();
    ?>
</body>

</html>