<?php
require_once 'dbverbindinga.php';


session_start();
if (isset($_POST['Gelukt'])) {
    $db = maakVerbindingAirport();
    $passagiernummer = $_POST['passagiernummer'];
    $vluchtnummer = $_POST['vluchtnummer'];
    $query = "SELECT passagiernummer,vluchtnummer 
FROM Passagier 
";
    if (isset($_SESSION['test'])) {
        echo 'HOIHOI';
    }
    $query = $db->prepare($query);
    $query->execute();
    $ingelogd = false;
    while ($rij = $query->fetch()) {
        if ($ingelogd == false) {
            $pasnum = $rij['passagiernummer'];
            $vlunum = $rij['vluchtnummer'];
        
            if ($pasnum == $passagiernummer && $vlunum == $vluchtnummer) {
                $ingelogd = true;
                $_SESSION['test'] = $passagiernummer;
                header('Location: zelfservice.php');
            }
        }
    }
    if ($ingelogd == true) {
        header('Location: zelfservice.php');
    }
}
/*
$data = $db->prepare($query);
foreach ($data as $rij){
$passag=$rij["passagiernummer"];
$vlucht=$rij["vluchtnummer"];
if($passa)
35513, 'Knockeryrtle', 29092,
}
*/
?>



<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gelre Checkin</title>
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/styles.css">
</head>

<body>
    <header>
        <img class="logo" src="Images/Vliegtuig.png" alt="Foto van een vliegtuig">
        <h1> Gelre Checkin</h1>

        <nav>
            <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="vluchtzoeken.php">Vlucht Zoeken</a></li>
            </ul>
        </nav>

    </header>
    <main>

        <article>

            <h2>Welkom bij Gelre Checkin: Jouw Vliegveld Incheck Ervaring! </h2>
            <p>Gelre Airport is de beste vliegmaatschappij in Nederland.
                Beste prijzen, kwaliteit en klantliefdadigheid is bij ons te vinden!</p>
            <p>
                Bij ons kan je koffers inchecken en je eigen vluchten bekijken.
            </p>
            <h2>Vluchten Zoeken</h2>

            <div class="card">
                <h3>Vluchten Zoeken</h3>
                <p>Bekijk hier vluchten met behulp van een vluchtnummer</p>

                <a href="vluchtzoeken.php">Ga</a>
            </div>



        </article>
        <aside>
            <h2>Welkom bij Gelre Airport</h2>

            <form action="" method="post">
                <h3> Inloggen</h3>
                <div>
                    <label for="passagiernummer">Passagiernummer:</label>
                    <input type="text" id="passagiernummer" name="passagiernummer" placeholder="792334 (4 Cijfers)"
                        pattern="[0-9]{5}" title="Een passagier
                    nummer bestaat uit 6 cijfers." required>
                </div>
                <div>
                    <label for="vluchtnummer">Vluchtnummer :</label>
                    <input type="text" id="vluchtnummer" name="vluchtnummer" placeholder="JK9281 " title="Een vluchtnummer
                    moet 2 letters en daarna 4 nummers bevatten" required>
                </div>
                <!-- Deze pattern van vluchtnummer is inspiratie van deze website:
                https://stackoverflow.com/questions/47308788/html-input-pattern-that-consists-of-4-numbers-and-2-letters-at-the-end -->
                <div>
                    <label for="privacybeleid"> Ik ga akkoord met het <a class="normale-knop"
                            href="privacybeleid.php">privacybeleid</a></label>

                    <input type="checkbox" name="privacybeleid" id="privacybeleid" required>
                </div>
                <div>
                    <input type="submit" value="Inloggen" name='Gelukt'>
                </div>

            </form>
            <a class="center" href="medewerkerlogin.php">Inloggen voor Medewerkers </a>

        </aside>

    </main>
    <footer>
        &copy; Gelre Checkin 2023
    </footer>
</body>

</html>