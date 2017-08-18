<?php
$random_num = random_int(1, 10);

echo "Die Zufallszahl ist " . $random_num . ".";
echo "...";
echo "Deine gew&auml;hlte Zahl ist " . $_POST['zahl'] . ".";
$message = "Kann losgehen";

if($_POST['zahl'] == $random_num){
    echo "Korrekt";
}
else{
    echo "Leider falsch";
}

?>
<!DOCTYPE HTML>
<html>
<head>
        <meta charset="utf-8">
	<title>PHP Spielerei</title>
</head>
<body>
    W&auml;hle eine Zahl zwischen 1 und 10!
    
    <p><?php echo $message; ?></p>
    
    <form method="post">
        <label>Zahl <input id="auswahl" type="number" name="zahl" min="1" max="10" ></label>
        <button type="submit" id="übermitteln">Vergleichen</button>
    </form>
    
    <?php
    
    ?>
</body>
</html>
