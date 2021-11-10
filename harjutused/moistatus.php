<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Mõistatused</title>
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
//jagamine
echo "Kui esimene arv jagame teise arvuga, siis vastuseks on ".(round($num/$num2,2));
//esimene arv ruudus
echo "<br>Esimene arv ruudus on ".pow($num,2);
echo "<br>Teine arv ruudus on ".pow($num2,2);
//lahutamine
echo "<br>Kui lahutame teine arvu esimesest saame ".($num-$num2);
//korrutis
echo "<br>Kui korrutame meie arvud saame ".($num*$num2);
echo "<br><h2>Arva ära linnanimi</h2>";
$name="London";
//teksti pikkus
echo "<br>Linnanimi pikkus: ".strlen($name);
//esimene täht
echo "<br>Linnanimi esimene täht: ".substr($name, 0, 1);
echo "<br>Linnanimi reverse: ".strrev($name);
echo "<br>Linnanimi teise pool: ".strstr($name,"d");
echo "<br>Linnanimi random: ".str_shuffle($name);
echo "<br><a href='vastus.php'>Õiged vastused</a>";

//
?>
</body>
</html>
