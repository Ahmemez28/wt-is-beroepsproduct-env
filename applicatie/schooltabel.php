<?php
/*-&& isset($_POST['naam']) && isset($_POST['geboortedatum']) && isset($_POST['schoolId'])-*/
require_once 'db_connectie.php';

$db = maakVerbinding();
if (isset($_POST['opslaan'])) {

    echo $_POST['schoolId'];
    $schoolId = $_POST['schoolId'];
    $naam = $_POST['naam'];
    $plaatsnaam = $_POST['plaatsnaam'];
    $fouten = [];
    $sql = 'INSERT INTO Muziekschool (schoolId,naam,plaatsnaam)
    VALUES (:schoolId,:naam,:plaatsnaam);';

    $data_array = [
        'schoolId' => $schoolId,
        'naam' => $naam,
        'plaatsnaam' => $plaatsnaam

    ];
    $data = $db->prepare($sql);
    $data->execute($data_array);
    $melding = 'Er ging iets fout bij het opslaan.';
    if ($data) {
        $melding = 'Gegevens zijn opgeslagen in de database.';
    }
    echo $melding;
}





function maakTabel()
{
    $db = maakVerbinding();
    $query = 'SELECT * FROM Muziekschool ORDER BY schoolId';

    $query_data = $db->prepare($query);
    $query_data->execute();
    $html_table = '<table>';
    $html_table = $html_table . '<tr><th>schoolId</th><th>Naam</th><th>Plaatsnaam</th></tr>';
    while ($rij = $query_data->fetch()) {
        $schoolId = $rij['schoolId'];
        $naam = $rij['naam'];
        $plaatsnaam = $rij['plaatsnaam'];


        $html_table = $html_table . "<tr><td>$schoolId</td><td>$naam</td><td>$plaatsnaam</td></tr>";
    }

    $html_table = $html_table . "</table>";
    echo $html_table;
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

        th,
        td {
            text-align: center;
            padding: 1rem;
            border: 2px solid black;

        }
    </style>
</head>

<body>
    <a href='schoolzoek.php'> Terug</a>
    <?php
    maakTabel();
    ?>

</body>

</html>