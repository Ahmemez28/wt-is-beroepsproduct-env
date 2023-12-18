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
        <h2>Medewerker</h2>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>
                    <a  href="#">Werk</a>
                    <ul>
                        <li><a  href="vluchtenoverzicht.php">Vluchten Overzicht</a></li>
                        <li><a  href="passagierdetail.php">Passagier Detail</a></li>
                    </ul>
                </li>
                <li><a  class="active" href="medewerker.php">Medewerker Home</a></li>
                
            </ul>
        </nav>

    </header>
    <main>


        <article>
            <h2>Welkom bij Gelre Checkin Werken! </h2>
           
                
                <p>Als medewerker bij Gelre Checkin is bij jou de taak om onze passagiers in te
                     checken en nieuwe vluchten 
                    toe te voegen!</p>
                <p>
                    Bij ons kan je koffers inchecken en je eigen vluchten bekijken.
                </p>
                <div class="card-container">
                    <div class="card">
                        <h3>Passagierdetail</h3>
                        <p>Check hier je koffers in en bekijk je vluchtgegevens</p>

                        <a href="passagierdetail.php">Ga</a>
                    </div>
                    <div class="card">
                        <h3>Vlucht Overzicht</h3>
                        <p>Zoek hier vluchten op Gelre Airport met een vluchtnummer.</p>

                        <a href="vluchtenoverzicht.php">Ga</a>
                    </div>
                    
                   
                </div>
            

        </article>

       
    </main>
    <footer>
        &copy; Gelre Checkin 2023
    </footer>
</body>

</html>