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
echo "<h3>Release 0</h3>";
require_once ("animal.php");

$sheep = new animal("Shaun");

$nama = $sheep->getName();
$kaki = $sheep->getLegs();
$darahDingin = $sheep->getColdBlooded();

echo "Hewan ini namanya adalah: $nama <br>";
echo "Hewan ini mempunyai kaki: $kaki <br>";
echo "Hewan ini berdarah dingin: $darahDingin<br>";

?>

</body>
</html>



