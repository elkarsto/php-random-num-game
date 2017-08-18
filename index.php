<?php
session_start();

if (isset($_SESSION['Test'])) {
    $random_num = $_SESSION['Test'];
} else {
    $random_num = random_int(1, 100);
    $_SESSION['Test'] = $random_num;
}

//print_r($random_num);
//echo "Die Zufallszahl ist die " . $random_num . ".";
//echo "...";
//echo "Deine gew&auml;hlte Zahl ist die " . $_POST['zahl'] . ".";

$message = "Kann losgehen";

if ($_POST) {

    if ($_POST['zahl'] == $random_num) {
        $message = "Korrekt!";
        unset($_SESSION['Test']);
        $_SESSION['counter'] ++;
        $message .= " Du hast " . $_SESSION['counter'] . " Versuche gebraucht.";
        $_SESSION['counter'] = 0;
    } else {
        $message = "Leider falsch, ";
        $_SESSION['counter'] ++;

        if ($_POST['zahl'] < $random_num) {
            $message = $message . "dein Wert liegt unter der Zufallszahl!";
        }

        if ($_POST['zahl'] > $random_num) {
            $message .= "dein Wert liegt &uuml;ber der Zufallszahl";
        }
    }
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Spielerei</title>
    </head>
    <body>
        W&auml;hle eine Zahl zwischen 1 und 100!
        <p><?php echo $message; ?></p>
        <form method="post">
            <label>Zahl <input id="auswahl" type="number" name="zahl" min="1" max="100" ></label>
            <button type="submit" id="übermitteln">Vergleichen</button>
        </form>


    </body>
</html>
