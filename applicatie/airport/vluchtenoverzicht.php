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
        <h1> Vluchten Overzicht</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>
                    <a href="#">Werk</a>
                    <ul>
                        <li><a class="active"  href="vluchtenoverzicht.php">Vluchten Overzicht</a></li>
                        <li><a  href="passagierdetail.php">Passagier Detail</a></li>
                    </ul>
                </li>
                <li><a href="medewerker.php">Medewerker Home</a></li>
                
            </ul>
        </nav>

    </header>
    <main >


        <article>
            <h2> Vluchten Overzicht</h2>
            <h3> Filters</h3>
            <form action="#" method="get">
                <div>
                    <label for="tijd">Tijd:</label>
                    <input type="time" id="tijd" name="tijd" required>
                </div>
                <div>
                    <label for="luchthaven">Luchthaven:</label>
                    <select name="luchthaven" id="luchthaven">
                        <option value="geen-filter">Geen Filter</option>
                        <option value="Schiphol, Amsterdam">Schiphol, Amsterdam</option>
                        <option value="Heathrow, Londen">Heathrow, Londen</option>
                        <option value="Charles de Gaulle, Parijs">Charles de Gaulle, Parijs</option>
                        <option value="Fiumicino, Rome">Fiumicino, Rome</option>
                        <option value="Los Angeles International, Los Angeles">Los Angeles International, Los Angeles
                        </option>
                        <option value="Dubai International, Dubai">Dubai International, Dubai</option>
                        <option value="Hong Kong International, Hong Kong">Hong Kong International, Hong Kong</option>
                        <option value="Ben Gurion, Tel Aviv">Ben Gurion, Tel Aviv</option>
                        <option value="O'Hare International, Chicago">O'Hare International, Chicago</option>
                        <option value="Incheon International, Seoel">Incheon International, Seoel</option>
                    </select>
                </div>
                <div>
                    <input type="submit" value="Filteren">
                </div>
            </form>
            <h3> Klik op de vluchtnummers om op de detailpagina te komen</h3>
            <p> Een (G) houdt in dat de vlucht al is vertokken.</p>
            <p> Een (NG) houdt in dat de vlucht niet is vertrokken</p>
            <table>
                <thead>
                    <tr>
                        <th>Vluchtnummer</th>
                        <th>Datum</th>
                        <th>Vertrektijd</th>
                        <th>Luchthaven</th>
                      
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="vluchtdetail.php" class="normale-knop">BL2353</a></td>
                        <td>12-09-23(G)</td>
                        <td>12:00</td>
                        <td>Naar Brussel</td> </tr><tr>
                        <td><a href="vluchtdetail.php" class="normale-knop">BR5768</a></td>
                        <td>26-10-22(G)</td>
                        <td>17:30</td>
                        <td>Naar Berlijn</td> </tr>
                    <tr>
                        <td><a href="vluchtdetail.php" class="normale-knop">AM9281</a></td>
                        <td>25-11-23(NG)</td>
                        <td>09:00</td>
                        <td>Naar Amsterdam</td></tr>
<tr>
                        <td><a href="vluchtdetail.php" class="normale-knop">LN9291</a></td>
                        <td>26-11-23(NG)</td>
                        <td>09:10</td>
                        <td>Naar Londen</td>
                    </tr>
                    <tr>
                        <td><a href="vluchtdetail.php" class="normale-knop">PR9301</a></td>
                        <td>27-11-23(NG)</td>
                        <td>09:20</td>
                        <td>Naar Parijs</td>
                    </tr>
                    <tr>
                        <td><a href="vluchtdetail.php" class="normale-knop">AL9311</a></td>
                        <td>28-11-23(NG)</td>
                        <td>09:30</td>
                        <td>Van Algiers</td>
                    </tr>
                    <tr>
                        <td><a href="vluchtdetail.php" class="normale-knop">LA9321</a></td>
                        <td>29-11-23(NG)</td>
                        <td>09:40</td>
                        <td>Naar Los Angeles</td>
                    </tr>
                    <tr>
                        <td><a href="vluchtdetail.php" class="normale-knop">DB9331</a></td>
                        <td>30-11-23(NG)</td>
                        <td>09:50</td>
                        <td>Van Dubai</td>
                    </tr>
                    <tr>
                        <td><a href="vluchtdetail.php" class="normale-knop">HK9341</a></td>
                        <td>01-12-23(NG)</td>
                        <td>10:00</td>
                        <td>Van Hong Kong</td>
                    </tr>
                    <tr>
                        <td><a href="vluchtdetail.php" class="normale-knop">TA9351</a></td>
                        <td>02-12-23(NG)</td>
                        <td>10:10</td>
                        <td>Van Tel Aviv</td>
                    </tr>
                    <tr>
                        <td><a href="vluchtdetail.php" class="normale-knop">CG9361</a></td>
                        <td>03-12-23(NG)</td>
                        <td>10:20</td>
                        <td>Van Chicago</td>
                    </tr>
                    <tr>
                        <td><a href="vluchtdetail.php" class="normale-knop">SL9371</a></td>
                        <td>04-12-23(NG)</td>
                        <td>10:30</td>
                        <td>Naar Seoel</td>
                    </tr>



                </tbody>
            </table>

            <a href="nieuwevlucht.php">Nieuwe Vlucht Toevoegen</a>


        </article>

    </main>
    <footer>
        &copy; Gelre Checkin 2023
    </footer>
</body>

</html>