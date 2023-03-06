<?php
if (isset($_GET['submit'])) {
 $nama = $_GET['nama'];
 $matkul = $_GET['matkul'];
 $uts = $_GET['uts'];
 $uas = $_GET['uas'];
 $praktikum = $_GET['praktikum'];
 $average = ($uts + $uas + $praktikum) / 3;

 echo "Nama: $nama <br>";
echo "Matkul: $matkul <br>";
echo "UTS: $uts <br>";
echo "UAS: $uas <br>";
echo "PRAKTIKUM: $praktikum";

echo "<br> <br>";

echo "Nilai Rata-rata: "
} else {
    echo "Tidak ada data!";
}