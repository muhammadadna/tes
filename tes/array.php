<?php 

$aplikasi[1] = 'gtAkademik';
$aplikasi[2] = 'gtFinansi';
$aplikasi[3] = 'gtPerizinan';
$aplikasi[4] = 'gtEcampuz';
$aplikasi[5] = 'gtOviz';

$index = 0;

while ($index < count($aplikasi)) {
    echo $aplikasi[$index]."<br>";
    $index++;
}