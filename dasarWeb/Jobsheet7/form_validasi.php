<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi jQuery</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi jQuery</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br><br>
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br><br>
        
        <input type="submit" value="Submit">
    </form>

    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            var nama = $("#nama").val().trim();
            var email = $("#email").val().trim();
            var isValid = true;

            // Validasi Nama
            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                isValid = false;
            } else {
                $("#nama-error").text("");
            }

            // Validasi Email
            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                isValid = false;
            } else {
                // Regex sederhana untuk validasi format email
                var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                if (!emailPattern.test(email)) {
                    $("#email-error").text("Format email tidak valid.");
                    isValid = false;
                } else {
                    $("#email-error").text("");
                }
            }

            if (!isValid) {
                event.preventDefault(); // Menghentikan pengiriman form jika validasi gagal
            }
        });
    });
    </script>
</body>
</html>