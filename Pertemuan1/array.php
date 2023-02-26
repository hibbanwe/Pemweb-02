<?php

// Array index
$animals = ['Macan', 'Kucing', 'Beruang', 'Ayam'];

// Mengakses array index
echo $animals[2];

// Array Assosiatif
$animal = [
    'nama' => $animals[1],
    'jenis' => 'Karnivora',
    'usia' => "4 bulan"
];

// mengakses array assosiatif
echo $animal['animal'];