<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Validasi dan proses data di sini
    // Contoh: kirim email, simpan ke database, dll.

    echo "<div id='sendmessage' class='show'>Terima kasih, pesan Anda telah terkirim. Kami akan segera menghubungi Anda.</div>";
} else {
    echo "<div id='errormessage' class='show'>Formulir tidak dikirim dengan metode POST.</div>";
}
?>
