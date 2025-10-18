<!DOCTYPE html>
<html>
<head>
    <title>Form Input Aman dari HTML Injection</title>
</head>
<body>
    <h2>Form Input Aman</h2>
    <form method="post" action="">
        Nama: <input type="text" name="nama"><br><br>
        Komentar: <textarea name="komentar" rows="4" cols="30"></textarea><br><br>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $komentar = $_POST['komentar'];

        echo "<h3>Hasil Input (Belum Aman)</h3>";
        echo "Nama: $nama <br>";
        echo "Komentar: $komentar <br>";
    }
    ?>
</body>
</html>
