<!DOCTYPE html>
<html>
<head>
    <title>Regex pada PHP</title>
</head>
<body>
    <h2>Contoh Dasar Penggunaan Regex</h2>

    <?php
        $pattern = '/[a-z]/'; // Cocokkan huruf kecil.
        $text = 'This is a Sample Text.';
        if (preg_match($pattern, $text)) {
            echo "Huruf kecil ditemukan!";
        } else {
            echo "Tidak ada huruf kecil!";
        }
    ?>
</body>
</html>
