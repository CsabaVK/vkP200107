<?php 

echo "1-es feladat: <br>";
$rnd = rand(0, 50);
/*
if ($rnd%2 == 0) {
    echo $rnd;
}
*/
echo ($rnd * 2);

echo "<br> <br>2-es feladat: <br>";

echo rand(25, 40) * 5;

echo "<br><br>3-as feladat: <br>";

$rnd2 = rand(0, 1000000);
echo "Szám: ";
echo $rnd2;
echo " <br> Számjegyek száma: ";



?>

