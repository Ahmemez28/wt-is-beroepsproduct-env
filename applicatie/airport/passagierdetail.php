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
        <h1> Passagierdetail</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>
                    <a href="#">Werk</a>
                    <ul>
                        <li><a  href="vluchtenoverzicht.php">Vluchten Overzicht</a></li>
                        <li><a class="active" href="passagierdetail.php">Passagier Detail</a></li>
                    </ul>
                </li>
                <li><a href="medewerker.php">Medewerker Home</a></li>
                
            </ul>
        </nav>

    </header>
    <main >

        <article>
            <h2>Passagier</h2>

            <form action="#" method="post">

                <div>
                    <label for="vluchtnummerlijst">Bijbehorende Vluchtnummer:</label>
                    <select id="vluchtnummerlijst" name="vluchtnummerlijst" >
                        <option value="AM9281 (Naar Amsterdam)">AM9281 (Naar Amsterdam)</option>
                        <option value="LN9291 (Naar Londen)">LN9291 (Naar Londen)</option>
                        <option value="PR9301 (Naar Parijs)">PR9301 (Naar Parijs)</option>
                        <option value="AL9311 (Van Algiers)">AL9311 (Van Algiers)</option>
                        <option value="LA9321 (Naar Los Angeles)">LA9321 (Naar Los Angeles)</option>
                        <option value="DB9331 (Van Dubai)">DB9331 (Van Dubai)</option>
                        <option value="HK9341 (Van Hong Kong)">HK9341 (Van Hong Kong)</option>
                        <option value="TA9351 (Van Tel Aviv)">TA9351 (Van Tel Aviv)</option>
                        <option value="CG9361 (Van Chicago)">CG9361 (Van Chicago)</option>
                        <option value="SL9371 (Naar Seoel)">SL9371 (Naar Seoel)</option>
                    </select>
                </div>
                <div>
                    <label for="aantalpassagiers">Nieuwe Aantal Passagiers op Gekozen Vlucht:</label>
                    <input type="number" placeholder="172 (Max 200)" min="0" max="200" id="aantalpassagiers" name="aantalpassagiers" 
                        title="Er kunnen maar maximaal 200 passagiers op het vliegtuig" required>
                </div>
                <div>
                    <label for="passagiersnummer">Passagiersnummer:</label>
                    <input type="text" id="passagiersnummer" placeholder="7923" pattern="[0-9]{4}"
                        name="passagiersnummer" required>
                </div>
                <div>
                    <label for="stoel">Stoel:</label>
                    <input type="text" id="stoel" placeholder="72A" pattern="\d{2}[A-Ba-b]" name="passagiersnummer"
                        required>
                </div>
                <div>
                    <label for="naam">Naam:</label>
                    <input type="text" placeholder="Mitch Holewijn" id="naam" name="naam" required>
                </div>

                <div>
                    <label for="geslacht">Geslacht:</label>
                    <select id="geslacht">
                        <option value="Man">Man</option>
                        <option value="Vrouw">Vrouw</option>
                    </select>
                </div>
                <div>

                    <input type="submit" value="Check In">
                </div>
            </form>

        </article>
        <aside>
            <h2>Bagage</h2>

            <form action="#" method="post">
                <div>
                    <label for="luchthavenlijst">Bijbehorende Vluchtnummer:</label>
                    <select id="luchthavenlijst" name="luchthavenlijst" >
                        <option value="AM9281 (Naar Amsterdam)">AM9281 (Naar Amsterdam)</option>
                        <option value="LN9291 (Naar Londen)">LN9291 (Naar Londen)</option>
                        <option value="PR9301 (Naar Parijs)">PR9301 (Naar Parijs)</option>
                        <option value="AL9311 (Van Algiers)">AL9311 (Van Algiers)</option>
                        <option value="LA9321 (Naar Los Angeles)">LA9321 (Naar Los Angeles)</option>
                        <option value="DB9331 (Van Dubai)">DB9331 (Van Dubai)</option>
                        <option value="HK9341 (Van Hong Kong)">HK9341 (Van Hong Kong)</option>
                        <option value="TA9351 (Van Tel Aviv)">TA9351 (Van Tel Aviv)</option>
                        <option value="CG9361 (Van Chicago)">CG9361 (Van Chicago)</option>
                        <option value="SL9371 (Naar Seoel)">SL9371 (Naar Seoel)</option>
                    </select>
                </div>
                <div>
                    <label for="passagiersnummerbagage">Passagiersnummer:</label>
                    <input type="text" id="passagiersnummerbagage" placeholder="7923" pattern="[0-9]{4}"
                        name="passagiersnummerbagage" required>
                </div>
                <div>
                    <label for="koffers">Aantal Koffers:</label>
                    <input type="text" placeholder="3" id="koffers" name="koffers" required>
                </div>
                <div>
                    <label for="totalegewicht">Totale Gewicht:</label>
                    <input type="number" placeholder="110 (Max 200KG)" id="totalegewicht" max="200" title="Een passagier
                    kan maximaal 200KG aan bagage meenemen" name="totalegewicht" required>
                </div>
                <div>

                    <input type="submit" value="Check In">
                </div>
            </form>


        </aside>

    </main>
    <footer>
        &copy; Gelre Checkin 2023
    </footer>
</body>

</html>