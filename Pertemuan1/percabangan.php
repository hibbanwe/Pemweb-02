<?php
$jam = 23;

echo "Saat ini pukul: $jam <br>";

$hasil = $jam < 12;

if ($hasil) {
    echo "Selamat Pagi!";
} elseif ($jam < 18) {
    echo "Selamat Sore!";
} else {
    echo "Selamat Malam!";
}