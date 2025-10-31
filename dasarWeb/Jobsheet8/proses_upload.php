<?php
$targetDirectory = "uploads/"; // Ganti ke folder uploads

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Validasi yang diizinkan
$allowedExtensions = array("jpg", "jpeg", "png", "gif");
$maxsize = 5*1024*1024; // 5 MB

if (isset($_FILES['files']['name'][0]) && !empty($_FILES['files']['name'][0])) {
    $totalFiles = count($_FILES['files']['name']);

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;
        $fileSize = $_FILES['files']['size'][$i];
        $fileTmpName = $_FILES['files']['tmp_name'][$i];
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        echo "Memproses file $fileName...<br>";

        // Terapkan validasi dari Praktikum 1 di dalam loop
        if (in_array($fileType, $allowedExtensions) && $fileSize <= $maxsize) {
            if (move_uploaded_file($fileTmpName, $targetFile)) {
                echo "File $fileName berhasil diunggah.<br>";
                // Tampilkan thumbnail
                echo "<img src='$targetFile' width='100'><br>";
            } else {
                echo "Gagal mengunggah file $fileName.<br>";
            }
        } else {
            echo "File $fileName tidak valid atau melebihi ukuran 5MB.<br>";
        }
        echo "<hr>";
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>