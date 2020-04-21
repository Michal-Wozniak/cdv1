<?php

$data = getdate();
echo '<pre>';
print_r($data);
echo '</pre>';

$y1=$data['year'];
$m1=$data['mon'];
$d1=$data['mday'];

$y2=1998;
$m2=3;
$d2=6;

$time1= mktime(0, 0, 0, $m1, $d1, $y1);


$time2= mktime(0, 0, 0, $m2, $d2, $y2);

$seconds = abs($time1 - $time2);
$minutes = floor($seconds/60);
$days = floor($minutes /(60 * 24));
$years = number_format($days /365, 4);

echo "sekundy ", $seconds,'<br>';
echo "minut ", $minutes,'<br>';
echo "dni ", $days,'<br>';   
echo "lat ", $years ,'<br>';

?>