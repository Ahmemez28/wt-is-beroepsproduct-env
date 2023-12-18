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
                <li><a  href="index.php">Home</a></li>
                <li><a  href="vluchtzoeken.php">Vlucht Zoeken</a></li>
            </ul>
        </nav>


    </header>
    <main>

        <article>

            <h2> Inloggen</h2>

            <form action="medewerker.php" method="post">
                <div>
                    <label for="gebruikersnaam">Gebruikersnaam:</label>
                    <input type="text" id="gebruikersnaam" placeholder="Ahmed Ammoura" name="gebruikersnaam" required>
                </div>
                <div>
                    <label for="wachtwoord">Wachtwoord:</label>
                    <input type="password" id="wachtwoord" placeholder="**********" name="wachtwoord" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                    title="Je wachtwoord moet minimaal 1 nummer, 1 normale letter, 1 hoofdletter en 8 of meer karakters" required>
                </div>
                <!-- Pattern van deze website: 
                https://www.w3schools.com/howto/howto_js_password_validation.asp -->
                <div> <label for="privacybeleid"> Ik ga akkoord met het <a class="normale-knop"
                            href="privacybeleid.php">privacybeleid</a></label>
                    <input type="checkbox" name="privacybeleid" id="privacybeleid" required>

                </div>
                <div>

                    <input type="submit" value="Inloggen">
                </div>
                
            </form>

            <a class="center" href="index.php">Inloggen voor Passagiers </a>


        </article>

    </main>
    <footer>
        &copy; Gelre Checkin 2023
    </footer>
</body>

</html>