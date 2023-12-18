<!DOCTYPE html>
<html lang="en">

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
        <h1> Zelf-Service Inchecken</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="zelfservice.php">Zelf-Service</a></li>



            </ul>
        </nav>

    </header>
    <main >

        <article>
            <h2>Koffers Inchecken </h2>

            <form action="index.php" method="post">
                <div>
                    <label for="koffers">Aantal Koffers:</label>
                    <input type="number" id="koffers" placeholder="5 (Max 5)" max="5" title="Je mag
                    maximaal 5 koffers meenemen per passagier." name="koffers" min="1" required>
                </div>
                <div>
                    <label for="vluchtnummer">Totale Gewicht:</label>
                    <input type="number" placeholder="110 (Max 200KG p.p)" id="vluchtnummer" max="200" title="
            Maximale toegestaande gewicht is 200KG" name="vluchtnummer" required>
                </div>
                <div>

                    <input type="submit" value="Check In">
                </div>
            </form>

        </article>
        <aside>
            <h2> Passagier Gegevens</h2>

            <table>
                <thead>
                    <tr>
                        <th>Passagier</th>
                        <th>Gegevens</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Vluchtnummer</td>
                        <td>LA9321 </td>
                    </tr>
                    <tr>
                        <td>Passagiersnummer</td>
                        <td>4832</td>
                    </tr>
                    <tr>
                        <td>Voornaam</td>
                        <td>Riyad</td>
                    </tr>
                    <tr>
                        <td>Achternaam</td>
                        <td>Mahrez</td>
                    </tr>

                    <tr>
                        <td>Vertrek Luchthaven</td>
                        <td>Gelre Airport,Gelderland</td>
                    </tr>
                    <tr>
                        <td>Bestemming Luchthaven</td>
                        <td>Los Angeles International Airport</td>
                    </tr>
                    <tr>
                        <td>Datum</td>
                        <td>29-11-2024  </td>
                    </tr>
                    <tr>
                        <td>Vertrekstijd</td>
                        <td>12:00 </td>
                    </tr>



                </tbody>
            </table>

        </aside>

    </main>
    <footer>
        &copy; Gelre Checkin 2023
    </footer>
</body>

</html>