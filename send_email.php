<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $to = "alfrizhim@gmail.com"; // Ganti dengan alamat email Anda
    $subject = "Undangan Ngopi dari " . $name;
    $message = "Nama: " . $name;

    // Mengirim email tanpa alamat pengirim
    if (mail($to, $subject, $message)) {
        echo "Email berhasil dikirim.";
    } else {
        echo "Gagal mengirim email.";
    }
}
?>
