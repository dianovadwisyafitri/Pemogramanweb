<?php
// Deklarasi variabel
$a = 10;
$b = 5;

// Operator perbandingan
// Sama dengan (==)
$hasil = ($a == $b) ? "Benar" : "Salah";
echo "$a == $b: $hasil<br>";

// Tidak sama dengan (!= atau <>)
$hasil = ($a != $b) ? "Benar" : "Salah";
echo "$a != $b: $hasil<br>";

// Lebih besar (>)
$hasil = ($a > $b) ? "Benar" : "Salah";
echo "$a > $b: $hasil<br>";

// Lebih kecil (<)
$hasil = ($a < $b) ? "Benar" : "Salah";
echo "$a < $b: $hasil<br>";

// Lebih besar atau sama dengan (>=)
$hasil = ($a >= $b) ? "Benar" : "Salah";
echo "$a >= $b: $hasil<br>";

// Lebih kecil atau sama dengan (<=)
$hasil = ($a <= $b) ? "Benar" : "Salah";
echo "$a <= $b: $hasil<br>";

// Identik (===) - Memeriksa nilai dan tipe data
$c = "10"; // Tipe string
$hasil = ($a === $c) ? "Benar" : "Salah";
echo "$a === \$c: $hasil<br>";

// Tidak identik (!==) - Memeriksa nilai dan tipe data
$hasil = ($a !== $c) ? "Benar" : "Salah";
echo "$a !== \$c: $hasil<br>";
?>
