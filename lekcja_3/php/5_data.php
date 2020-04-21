<?php

echo date("Y-m-d"), '<br>';
echo date("Y-F-d"), '<br>';
echo date("H-i-s"), '<br>';

echo "Dzień tygdonia:",date("w"), '<br>';
echo "Numer tygdonia:",date("W"), '<br>';
echo "Numer dnia w roku:",date("z"), '<br>';//0-365

$data = getdate();
echo '<pre>';
print_r($data);
echo '</pre>';

echo "Dzień tygodnia: ", $data['weekday'], '<br>';
$day=$data['wday'];
switch ($day) {
    case '0':
        $day='niedziela';
        break;
    case '1':
        $day='poniedziałek';
        break;
    case '2':
        $day='wtorek';
        break;
    case '3':
        $day='środa';
        break;
    case '4':
        $day='czwartek';
        break;
    case '5':
        $day='piątek';
        break;
    case '6':
        $day='sobota';
        break;
   
}
echo "Dzień tygodnia: ", $data['wday'], '<br>';

//znacznik czasu

$y1=2020;
$m1=4;
$d1=21;

$time1= mktime(0, 0, 0, $m1, $d1, $y1);
echo $time1;

?>