<?php
$nilaiNumerik = 92;
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
echo "Nilai huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "<br><br>Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";


$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "<br><br>Jumlah buah yang akan dipanen adalah: $jumlahBuah";


$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "<br><br>Total skor ujian adalah: $totalSkor";


echo "<br><br><br>Nilai Mahasiswa : <br><br>";
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}


echo "<br><br><br>Sistem Penghitung Rata-rata : <br><br>";
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilai);
$nilaiBaru = array_slice($nilai, 2, 6); 

$total = array_sum($nilaiBaru);
$rata = $total / count($nilaiBaru);

echo "Total nilai: $total<br>";
echo "Rata-rata: $rata";


echo "<br><br><br>Sistem Penghitung Diskon : <br><br>";
$hargaAwal = 120000;
$diskon = 0;

if ($hargaAwal > 100000) {
    $diskon = 0.20 * $hargaAwal; // 20% dari harga
}

$hargaAkhir = $hargaAwal - $diskon;

echo "Harga awal: Rp $hargaAwal<br>";
echo "Diskon: Rp $diskon<br>";
echo "Harga yang harus dibayar: Rp $hargaAkhir";
?>