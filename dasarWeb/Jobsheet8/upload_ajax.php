<?php
$targetDirectory = "uploads/";
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}
$allowedExtensions = array("jpg", "jpeg", "png", "gif");
$maxsize = 5*1024*1024; 
$responseMessage = ""; 

if (isset($_FILES['file']['name'][0]) && !empty($_FILES['files']['name'][0])) {
    $totalFiles = count($_FILES['files']['name']);

    $fileName = $_FILES['files']['name'][$i];
    $targetFile = $targetDirectory . $fileName;
    $fileSize = $_FILES['files']['size'][$i];
    $fileTmpName = $_FILES['files']['tmp_name'][$i];
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $responseMessage .= "Memproses file $fileName...<br>";

    if (in_array($fileType, $allowedExtensions) && $fileSize <= $maxsize) {
        if (move_uploaded_file($fileTmpName, $targetFile)) {
            $responseMessage .= "File $fileName berhasil diunggah.<br>";
        } else {
            $responseMessage .= "Gagal mengunggah file $fileName.<br>";
        }
    } else {
        $responseMessage .= "File $fileName tidak valid (harus gambar & < 5MB).<br>";
    }
    $responseMessage .= "<hr>";
    
} else {
    $responseMessage = "Tidak ada file yang diunggah.";
}

echo $responseMessage;
?>