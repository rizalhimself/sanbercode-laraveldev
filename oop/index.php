<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP PHP</title>
</head>
<body>

<?php
//release 0
echo "<h3>Release 0</h3>";
require_once("animal.php");

//kambing
$sheep = new animal("Shaun");

$nama = $sheep->getName();
$kaki = $sheep->getLegs();
$darahDingin = $sheep->getColdBlooded();

//tampilkan release 0
echo "$nama <br>";
echo "$kaki <br>";
echo "$darahDingin <br>";

//release 1
echo "<br><h3>Release 1</h3>";

require_once("ape.php");
require_once("frog.php");

//monyet
$monyet = new ape("Kera Sakti");

$namaMonyet = $monyet->getName();
$kakiMonyet = $monyet->getLegs();
$darahMonyet = $monyet->getColdBlooded();
$teriakMonyet = $monyet->yell();

//kodok
$kodok = new frog("Buduk");

$namaKodok = $kodok->getName();
$kakiKodok = $kodok->getLegs();
$darahKodok = $kodok->getColdBlooded();
$lompatKodok = $kodok->jump();

//tampilkan release 1
//sheep
echo "Name: $nama <br>";
echo "Legs: $kaki <br>";
echo "Cold Blooded: $darahDingin<br><br>";
//kodok
echo "Name: $namaKodok <br>";
echo "Legs: $kakiKodok <br>";
echo "Cold Blooded: $darahKodok<br>";
echo "Jump: $lompatKodok<br><br>";
//monyet
echo "Name: $namaMonyet <br>";
echo "Legs: $kakiMonyet <br>";
echo "Cold Blooded: $darahMonyet <br>";
echo "Yell: $teriakMonyet<br>"

?>

</body>
</html>



