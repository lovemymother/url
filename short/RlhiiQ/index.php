<?php 

header('Refresh: 2; url=https://u.raz.my.id/');
$hit = json_decode(file_get_contents('log.json'));
$CountHit = $hit->hit+1;
$newHit = [
    'hit' => $CountHit,
    'url' => "https://u.raz.my.id/"
];
file_put_contents( __DIR__ . '/log.json',json_encode($newHit, JSON_PRETTY_PRINT));
echo '<body style="background-color: blue;"><h2 align="center" style="color:white; font-family: \'Courier New\', Courier, monospace;">Harap Ditunggu. Kami Akan Segera Mengantarkan Ke Tujuan Anda....</h2></body>';


