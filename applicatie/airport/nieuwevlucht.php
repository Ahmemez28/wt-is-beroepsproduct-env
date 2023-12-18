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
        <h1> Nieuwe Vlucht Toevoegen</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>
                    <a  href="#">Werk</a>
                    <ul>
                        <li><a class="active" href="vluchtenoverzicht.php">Vluchten Overzicht</a></li>
                        <li><a  href="passagierdetail.php">Passagier Detail</a></li>
                    </ul>
                </li>
                <li><a   href="medewerker.php">Medewerker Home</a></li>
            </ul>
        </nav>

    </header>
    <main >

        <article>
            <h2>Nieuwe Vlucht</h2>

            <form action="#" method="post">
                <div>
                    <label for="datum">Datum:</label>
                    <input type="date" id="datum" name="datum"  required />
                </div>
                <div>
                    <label for="tijd">Vertrektijd:</label>
                    <input type="time" id="tijd" name="tijd"  required />
                </div>
                <div>
                    <label for="vluchtnummer">Vluchtnummer:</label>
                    <input type="text" placeholder="JK9281" pattern="[A-Za-z]{2}\d{4}" title="Een vluchtnummer
                    moet 2 letters en daarna 4 nummers bevatten" id="vluchtnummer" name="vluchtnummer" required>
                </div>
                <div>
                    <label for="luchthaven">Luchthaven:</label>
                    <select name="luchthaven" id="luchthaven">
                        <option value="Schiphol, Amsterdam">Schiphol, Amsterdam</option>
                        <option value="Heathrow, Londen">Heathrow, Londen</option>
                        <option value="Charles de Gaulle, Parijs">Charles de Gaulle, Parijs</option>
                        <option value="Fiumicino, Rome">Fiumicino, Rome</option>
                        <option value="Los Angeles International, Los Angeles">Los Angeles International, Los Angeles</option>
                        <option value="Dubai International, Dubai">Dubai International, Dubai</option>
                        <option value="Hong Kong International, Hong Kong">Hong Kong International, Hong Kong</option>
                        <option value="Ben Gurion, Tel Aviv">Ben Gurion, Tel Aviv</option>
                        <option value="O'Hare International, Chicago">O'Hare International, Chicago</option>
                        <option value="Incheon International, Seoel">Incheon International, Seoel</option>
                    </select>
                </div>
              
                <div>
                    <label for="maxgewicht">Maximale Totale Gewicht:</label>
                    <input type="number" id="maxgewicht" name="maxgewicht"  required />
                </div>
                <div>
                    <label for="maxpassagiers">Maximale Aantal Passagiers:</label>
                    <input type="number" id="maxpassagiers" name="maxpassagiers"  required />
                </div>
                <div>

                    <input type="submit" value="Check In">
                </div>

               
            </form>

        </article>


    </main>
    <footer>
        &copy; Gelre Checkin 2023
    </footer>
</body>

</html>