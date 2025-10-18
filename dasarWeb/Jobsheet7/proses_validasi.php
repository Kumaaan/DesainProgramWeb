<!DOCTYPE html>
<html>
<head>
    <title>Hasil Validasi</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <h1>Hasil Validasi Form</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $errors = array();

        // Validasi Nama
        if (empty($nama)) {
            $errors[] = "Nama harus diisi.";
        }
        
        // Validasi Email
        if (empty($email)) {
            $errors[] = "Email harus diisi.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Format email tidak valid.";
        }
        
        // Jika ada kesalahan validasi
        if (!empty($errors)) {
            echo '<div class="error">';
            echo "<h4>Terjadi Kesalahan:</h4>";
            echo "<ul>";
            foreach ($errors as $error) {
                echo "<li>" . $error . "</li>";
            }
            echo "</ul>";
            echo '</div>';
        } else {
            // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
            echo "<p>Data berhasil dikirim:</p>";
            echo "Nama = " . htmlspecialchars($nama) . "<br>";
            echo "Email = " . htmlspecialchars($email);
        }
    }
    ?>
</body>
</html>