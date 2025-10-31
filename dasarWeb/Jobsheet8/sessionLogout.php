<?php
session_start();
session_destroy();
echo "Anda berhasil logout";
echo "<br><a href='sessionLoginForm.html'>Login Kembali</a>";
?>