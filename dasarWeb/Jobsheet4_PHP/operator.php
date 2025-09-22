<?php
$a = 10;
$b = 5;
$hasilTambah = $a + $b;
$hasilKurang = $a - $b; 
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Operasi Matematika <br><br>";
echo "Hasil Tambah : {$hasilTambah} <br>";
echo "Hasil Kurang : {$hasilKurang} <br>";
echo "Hasil Kali   : {$hasilKali} <br>";
echo "Sisa Bagi    : {$sisaBagi} <br>";
echo "Pangkat      : {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br><br>Operator perbandingan <br><br>";
echo "Hasil Sama              : {$hasilSama} <br>";
echo "Hasil Tidak Sama        : {$hasilTidakSama} <br>";
echo "Hasil Lebih Kecil       : {$hasilLebihKecil} <br>";
echo "Hasil Lebih Besar       : {$hasilLebihBesar} <br>";
echo "Hasil Lebih Kecil Sama  : {$hasilLebihKecilSama} <br>";
echo "Hasil Lebih Besar Sama  : {$hasilLebihBesarSama} <br>";

$hasilAnd = $a && $b;
$hasilor = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br><br>Operator logika <br><br>";
echo "Hasil And   : {$hasilAnd} <br>";
echo "Hasil Or    : {$hasilor} <br>";
echo "Hasil Not A : {$hasilNotA} <br>";
echo "Hasil Not B : {$hasilNotB} <br>";

$a1 = $a += $b;
$a2 = $a -= $b;
$a3 = $a *= $b;
$a4 = $a /= $b;
$a5 = $a %= $b;

echo "<br><br>Operator gabungan <br><br>";
echo "Hasil a += b : {$a1} <br>";
echo "Hasil a -= b : {$a2} <br>";
echo "Hasil a *= b : {$a3} <br>";
echo "Hasil a /= b : {$a4} <br>";
echo "Hasil a %= b : {$a5} <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br><br>Operator identitas <br><br>";
echo "Hasil Identik       : {$hasilIdentik} <br>";
echo "Hasil Tidak Identik : {$hasilTidakIdentik} <br>";

$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "<br><br> Penghitung Kursi <br><br>";
echo "Total kursi : $totalKursi<br>";
echo "Jumlah kursi kosong : $kursiKosong<br>";
echo "Persentase kursi kosong: " . $persentaseKosong . "%";
?>