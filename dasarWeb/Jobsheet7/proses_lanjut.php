<!DOCTYPE html>
<html>
<head>
    <title>Hasil Form Lanjut</title>
</head>
<body>
    <h2>Data yang Anda Kirim:</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedBuah = $_POST['buah'];

        $selectedWarna = [];
        if (isset($_POST['warna'])) {
            $selectedWarna  = $_POST['warna'];
        }

        $selectedJenisKelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : 'Tidak memilih';

        echo "Anda memilih buah: <b>" . htmlspecialchars($selectedBuah) . "</b><br>";

        if (!empty($selectedWarna)) {
            // Mengamankan setiap item dalam array sebelum menampilkannya
            $selectedWarnaAman = array_map('htmlspecialchars', $selectedWarna);
            echo "Warna favorit Anda: <b>" . implode(", ", $selectedWarnaAman) . "</b><br>";
        } else {
            echo "Anda tidak memilih warna favorit.<br>";
        }

        echo "Jenis kelamin Anda: <b>" . htmlspecialchars($selectedJenisKelamin) . "</b>";
    }
    ?>
</body>
</html>