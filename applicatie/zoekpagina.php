<?php
session_start();
require_once 'db_connectie.php';

$componistId = '';
$naam = '';
$geboortedatum = '';
$schoolId = '';

$componistId = isset($_SESSION['componistId']) ? $_SESSION['componistId'] : '';
$naam = isset($_SESSION['naam']) ? $_SESSION['naam'] : '';
$geboortedatum = isset($_SESSION['geboortedatum']) ? $_SESSION['geboortedatum'] : '';
$schoolId = isset($_SESSION['schoolId']) ? $_SESSION['schoolId'] : '';
$db = maakVerbinding();
$selectQuery = 'SELECT naam,schoolId FROM Muziekschool ORDER BY schoolId';
$data = $db->prepare($selectQuery);
$data->execute();
function tekenSelectLijst($data)
{
    echo '<select name="schoolId" id="schoolId" placeholder="SchoolID">';
    while ($rij = $data->fetch()) {
        $naam = $rij['naam'];
        $schoolId = $rij['schoolId'];

        echo "<option value=$schoolId>$naam</option>";
    }
    echo "</select>";
     
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../CSS/styles.css">
</head>

<body>
    <article>
        <form action='gegevens.php' method='post'>
            <input type="number" id="componistId" name="componistId" placeholder="Componist ID"
                value="<?= $componistId ?>" />
            <input type="text" id="naam" name="naam" placeholder="Ahmed" value="<?= $naam ?>" />
            <input type="date" id="geboortedatum" name="geboortedatum" placeholder="Geboortedatum"
                value="<?= $geboortedatum ?>" />
            <?php
            tekenSelectLijst($data);

            ?>
            <input type='reset' value='Wissen'>
            <input type='submit' name='opslaan' value='Opslaan'>
            <a href='schoolzoek.php'>Scholen</a>
        </form>
    </article>
</body>

</html>