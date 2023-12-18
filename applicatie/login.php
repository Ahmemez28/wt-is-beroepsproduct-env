<?php
$logged_in = false;
session_start();
session_destroy();

$html = '';
$errorTekst = '';
$gebruikers = [
    'Ahmed' => 'Ammoura',
    'Recep' => 'Ozkan',
    'Kemal' => 'Kilic',
    'Riyad' => 'Mahrez'
];
if (isset($_POST['username']) && isset($_POST['pass'])) {
    if (strlen($_POST['username']) < 4) {
        $errorTekst = 'HAAA';

    }

    foreach ($gebruikers as $gebruiker => $wachtwoord) {
        if ($_POST['username'] == $gebruiker && $_POST['pass'] = $wachtwoord) {
            if ($logged_in == false) {
                $_SESSION['username'] = $_POST['username'];

                $html = "<h1>Welcome {$_SESSION['username']}</h1>";
                $logged_in = true;

            } else {
                $html = "<p> Verkeerde gegevens ingevuld</p>";
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testsessie</title>
</head>

<body>
    <?php
    echo $errorTekst;
    if ($logged_in) {
        echo $html;
        ?>

        <form action="login.php" method="post">
            <input type="submit" value="logout">
        </form>

    <?php } else { ?>



        <h2>Welkom bij OBL </h2>
        <h3>Log hier in</h3>
        <!-- TODO: ongeldige waarde voor `action`. -->
        <form action="" method="post">
            <input type="text" name="username">
            <input type="password" name="pass">
            <input type="submit" value="login">
        </form>

        <?php echo $html;
    } ?>
</body>

</html>