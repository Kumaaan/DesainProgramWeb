<!DOCTYPE html>
<html>
<head>
    <title>Form Input Aman dari HTML Injection</title>
</head>
<body>
    <h2>Form Input Aman dari HTML Injection</h2>
    <form method="post" action="">
        Nama: <input type="text" name="nama"><br><br>
        Komentar: <textarea name="komentar" rows="4" cols="30"></textarea><br><br>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $komentar = $_POST['komentar'];

        $nama_aman = htmlspecialchars($nama);
        $komentar_aman = htmlspecialchars($komentar);

        echo "<h3>Hasil Input (Sudah Aman)</h3>";
        echo "Nama: $nama_aman <br>";
        echo "Komentar: $komentar_aman <br>";
    }
    ?>
</body>
</html>
