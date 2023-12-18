<?php
$naam = 'Mustafa Kemal';




$vandaag = date_create('now');
$datum = $vandaag->format('d/F/Y');
if (isset($_POST["naam"])) {
    $naam = $_POST["naam"];
}

?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>PHP voorbeeld</title>

</head>

<body>

    Hallo
    <?= $naam ?>.<br>
    Het is vandaag
    <?= $datum ?>.
    <h1>Voorbeeld </h1>

    
    <form action="hoelangnog.php" method="get">

        <label for="datum">Datum:</label>
        <input type="date" name="datum" id="datum" required>
        <label for="omschrijving">Omschrijving:</label>
        <input type="text" name="omschrijving" id="omschrijving" required>
        <input type="submit" value="Git">
    </form>
    <a href="gelre.php">Gelre</a>
    <a href="ishetalweekend.php">Weekend</a>
    <a href="array.php">Arrays</a>
    <a href="database.php">Database</a>
    <a href="login.php">Login</a>
    <a href="preparedstatements.php">SQL Injec</a>
    <a href="zoekpagina.php">Componist</a>
</body>

</html>