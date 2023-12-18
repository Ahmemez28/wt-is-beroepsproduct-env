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
        <h1> Vluchten Zoeken</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="vluchtgegevens.php">Vlucht Zoeken</a></li>
            </ul>
        </nav>

    </header>
    <main >

        <article>
            <h2>Vlucht zoeken </h2>
      
                <p> Voer hier een vluchtnummer in om een vlucht te bekijken</p>
                <form action="vluchtgegevens.php" method="get">
                    <div>
                        <label >Vluchtnummer
                            <select >
                                <option value="AM9281">AM9281 (Naar Amsterdam)</option>
                                <option value="LN9291">LN9291 (Naar Londen)</option>
                                <option value="PR9301">PR9301 (Naar Parijs)</option>
                                <option value="AL9311">AL9311 (Van Algiers)</option>
                                <option value="LA9321">LA9321 (Naar Los Angeles)</option>
                                <option value="DB9331">DB9331 (Van Dubai)</option>
                                <option value="HK9341">HK9341 (Van Hong Kong)</option>
                                <option value="TA9351">TA9351 (Van Tel Aviv)</option>
                                <option value="CG9361">CG9361 (Van Chicago)</option>
                                <option value="SL9371">SL9371 (Naar Seoel)</option>
                            </select>
                        </label>
                    </div>

                    <input type="submit" value="Zoek">
                </form>
          
        </article>
        <aside>
            <h2> Vlucht Gegevens</h2>
            
                <table>
                    <thead>
                        <tr>
                            <th>Vlucht</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Vluchtnummer</td>
                            <td>HK9341</td>
                        </tr>
                        <tr>
                            <td>Datum</td>
                            <td>01-12-2023</td>
                        </tr>
                        <tr>
                            <td>Vertrektijd</td>
                            <td>10:00</td>
                        </tr>
                        <tr>
                            <td>Aankomsttijd</td>
                            <td>14:30</td>
                        </tr>
                       
                        <tr>
                            <td>Vlucht Van</td>
                            <td>Hong Kong International, Hong Kong</td>
                        </tr>
                        <tr>
                            <td>Vlucht Naar</td>
                            <td>Gelre Airport,Arnhem</td>
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