<!DOCTYPE html>
<html>
<head>
    <title>Form Validasi dengan jQuery dan AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .error-text { color: red; font-size: 0.9em; }
        #server-response { margin-top: 20px; padding: 10px; border: 1px solid #ccc; }
    </style>
</head>
<body>
    <h1>Form Validasi dengan AJAX</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" class="error-text"></span><br><br>
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" class="error-text"></span><br><br>
        
        <input type="submit" value="Submit">
    </form>

    <div id="server-response"></div>

    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            event.preventDefault(); // Selalu cegah submit default

            $.ajax({
                url: 'proses_validasi.php',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    // Bersihkan error sebelumnya
                    $('.error-text').text('');
                    
                    if (response.status === 'error') {
                        // Tampilkan error validasi dari server
                        if (response.errors.nama) {
                            $('#nama-error').text(response.errors.nama);
                        }
                        if (response.errors.email) {
                            $('#email-error').text(response.errors.email);
                        }
                        $('#server-response').html('<p style="color:red;">Silakan perbaiki kesalahan di atas.</p>');
                    } else if (response.status === 'success') {
                        // Tampilkan pesan sukses
                        $('#server-response').html('<p style="color:green;">' + response.message + '</p>');
                        $('#myForm')[0].reset(); // Kosongkan form
                    }
                },
                error: function() {
                    $('#server-response').html('<p style="color:red;">Terjadi kesalahan server.</p>');
                }
            });
        });
    });
    </script>
</body>
</html>