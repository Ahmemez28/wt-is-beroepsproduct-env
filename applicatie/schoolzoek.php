<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <style>
form{
    display:flex;
    flex-direction: column;
    align-items: center;
}
    </style>
</head>

<body>
    <article>
    <form action='schooltabel.php' method='post'>
        <input type="number" id="schoolId" name="schoolId" placeholder="SchoolId" />
        <input type="text" id="naam" name="naam" placeholder="SchoolNaam" />
        <input type="text" id="plaatsnaam" name="plaatsnaam" placeholder="Plaatsnaam" />
        <input type='reset' value='Wissen'>
        <input type='submit' name='opslaan' value='Opslaan'>
        <a href='zoekpagina.php'>Componisten</a>
    </form>
    </article>
</body>

</html>