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
        <h1> Vluchten Detail</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>
                    <a href="#">Werk</a>
                    <ul>
                        <li><a  class="active"  href="vluchtenoverzicht.php">Vluchten Overzicht</a></li>
                        <li><a href="passagierdetail.php">Passagier Detail</a></li>
                    </ul>
                </li>
                <li><a href="medewerker.php">Medewerker Home</a></li>
                
            </ul>
        </nav>

    </header>
    <main >


        <article>
            <h2> Vluchten Detail</h2>
            <table>
                <thead>
                    <tr>
                        <th>Vlucht</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Vluchtnummer</td>
                        <td>LN9291</td>
                    </tr>
                    <tr>
                        <td>Datum</td>
                        <td>26-11-2023</td>
                    </tr>
                    <tr>
                        <td>Vertrektijd</td>
                        <td>09:10</td>
                    </tr>
                    <tr>
                        <td>Aankomsttijd</td>
                        <td>10:15</td>
                    </tr>
                    <tr>
                        <td>Vlucht Van</td>
                        <td>Gelre Airport, Arnhem</td>
                    </tr>
                    <tr>
                        <td>Vlucht Naar</td>
                        <td>Heathrow, Londen</td>
                    </tr>
                   
                    <tr>
                        <td>Max Gewicht Per Persoon </td>
                        <td>200 KG</td>
                    </tr>

                    <tr>
                        <td>Max Totale Gewicht </td>
                        <td>40.000KG</td>
                    </tr>
                    <tr>
                        <td>Max Aantal Passagiers</td>
                        <td>200</td>
                    </tr>

                    <tr>
                        <td>Vliegtuig Naam</td>
                        <td>Airbus Beluga</td>
                    </tr>

                </tbody>
            </table>
            <h2>
                Foto van het vliegtuig
            </h2>
            <img class="logo" src="Images/Vliegtuig.jpeg" alt="Foto van het vliegtuig">

        </article>

    </main>
    <footer>
        &copy; Gelre Checkin 2023
    </footer>
</body>

</html>