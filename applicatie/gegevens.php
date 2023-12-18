<?php
/*-&& isset($_POST['naam']) && isset($_POST['geboortedatum']) && isset($_POST['schoolId'])-*/

session_start();
require_once 'db_connectie.php';

$db = maakVerbinding();
if (isset($_POST['opslaan'])) {
    $componistId = htmlspecialchars(trim($_POST['componistId']));
    $naam = htmlspecialchars(strip_tags(trim($_POST['naam'])));
    $geboortedatum = htmlspecialchars(trim($_POST['geboortedatum']));
    $schoolId = htmlspecialchars(trim($_POST['schoolId']));

    $_SESSION['componistId'] = $_POST['componistId'];
    $_SESSION['naam'] = $_POST['naam'];
    $_SESSION['geboortedatum'] = $_POST['geboortedatum'];
    $_SESSION['schoolId'] = $_POST['schoolId'];

    $fouten = [];
    $sql = 'INSERT INTO componist (componistId, naam, geboortedatum, schoolId)
    VALUES (:componistId,:naam, :geboortedatum, :schoolId);';
    if (empty($componistId)) {
        $fouten[] = 'componistId is verplicht om in te vullen.';
    }
    if (strlen($componistId) > 4) {
        $fouten[] = 'componistId is langer dan 4 nummers';
    }
    if (strlen($naam) > 20) {
        $fouten[] = 'naam is langer dan 20 karakters';
    }
    if (strlen($schoolId) > 2) {
        $fouten[] = 'School ID is langer dan 2 karakters';
    }
    if (!is_numeric($componistId)) {
        $fouten[] = 'componistId moet een numerieke waarde zijn.';
    }
    if (empty($naam)) {
        $fouten[] = 'naam is verplicht om in te vullen.';
    }
    if (!preg_match('/^[a-zA-Z  ]+/', $naam)) {
        $fouten[] = 'naam geen cijfers bevatten';
    }
    if (empty($geboortedatum)) {
        $geboortedatum = null;
    }
    if (empty($schoolId)) {
        $schoolId = null;
    }
    if (!is_numeric($schoolId)) {
        $fouten[] = 'test';
    }
    if (count($fouten) > 0) {
        $melding = '<ul class="error">';
        foreach ($fouten as $fout) {
            $melding .= '<li>' . $fout . '</li>';
        }
        $melding .= '</ul>';
    } else {
        try{
        $data_array = [
            'componistId' => $componistId,
            'naam' => $naam,
            'geboortedatum' => $geboortedatum,
            'schoolId' => $schoolId
        ];
        $data = $db->prepare($sql);
        $data->execute($data_array);
        $melding = 'Er ging iets fout bij het opslaan.';
        if ($data) {
            $melding = 'Gegevens zijn opgeslagen in de database.';
            $_SESSION['componistId'] = '';
            $_SESSION['naam'] = '';
            $_SESSION['geboortedatum'] = '';
            $_SESSION['schooloptie'] = '';
        }
    }
    catch(PDOException $e){
        $melding='Eroror';
    }
    }

}




function maakTabel()
{
    $db = maakVerbinding();
    $query = 'SELECT * FROM componist';

    $query_data = $db->prepare($query);
    $query_data->execute();
    $html_table = '<table>';
    $html_table = $html_table . '<tr><th>componistId</th><th>Naam</th><th>Geboortedatum</th><th>SchoolId</th></tr>';
    while ($rij = $query_data->fetch()) {
        $componistId = $rij['componistId'];
        $naam = $rij['naam'];
        $geboortedatum = $rij['geboortedatum'];
        $schoolId = $rij['schoolId'];

        $html_table = $html_table . "<tr><td>$componistId</td><td>$naam</td><td>$geboortedatum</td><td>$schoolId</td></tr>";
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
    <link rel="stylesheet" href="../../CSS/styles.css">
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
    <article>
        <?php echo "<h2>" . $melding . "</h2>"; ?>
        <a href='zoekpagina.php'> Terug</a>
        <?php
        maakTabel();
        ?>
    </article>

</body>

</html>