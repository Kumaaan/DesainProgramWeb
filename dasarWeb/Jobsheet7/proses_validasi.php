<?php
header('Content-Type: application/json'); // Set header untuk respon JSON

$errors = [];
$data = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = trim($_POST["nama"]);
    $email = trim($_POST["email"]);

    // Validasi Nama
    if (empty($nama)) {
        $errors['nama'] = "Nama harus diisi.";
    }
    
    // Validasi Email
    if (empty($email)) {
        $errors['email'] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Format email tidak valid.";
    }

    if (!empty($errors)) {
        $data['status'] = 'error';
        $data['errors'] = $errors;
    } else {
        $data['status'] = 'success';
        $data['message'] = 'Data berhasil dikirim: Nama = ' . htmlspecialchars($nama) . ', Email = ' . htmlspecialchars($email);
    }
}

echo json_encode($data);
?>