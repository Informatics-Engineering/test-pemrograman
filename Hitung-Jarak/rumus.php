<?php

$x1=$_POST['x1'];
$x2=$_POST['x2'];
$y1=$_POST['y1'];
$y2=$_POST['y2'];

$a = $x2 - $x1;
$b = $y2 - $y1;

$hasila = pow($a,2);
$hasilb = pow($b,2);

$hasil = sqrt($hasila + $hasilb);
echo json_encode($hasil);
?>
