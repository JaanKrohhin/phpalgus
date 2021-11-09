<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>PHP Start</title>
</head>
<body>
    <?php
    echo "<h2>Good morning...</h2>";
    $tekst="Today is the first PHP lesson";
    echo $tekst;
    echo "<br>";
    echo "<h2>Matemaatika tehed. Mõistatus</h2>";
    echo "<h3>Arva ära kaks arvu :)</h3>";
    $num=7;
    $num2=3;
    //kahe arvude liitmine +
    echo "Kui liidame kokku, vastus on ".($num+$num2);
    echo "<br>";
    echo "Kui esimene arv jagame teise arvuga, siis vastuseks on ".(round($num/$num2,2))
    ?>
<footer>
    <?php
    echo "Tänane kuupäev on ".date("d.m.Y");
    echo "<br>";
    echo "Kell on ".date("H: i");//H: i: s sekundideks
    ?>
</footer>
</body>
</html>
