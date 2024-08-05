<?php
// Ambil email dari parameter URL
$email = isset($_GET['email']) ? $_GET['email'] : 'unknown@example.com';

// Waktu saat ini
$timestamp = date("Y-m-d H:i:s");

// Simpan data ke file log
$logfile = 'email_tracking_log.txt';
$logdata = "Email: $email - Opened at: $timestamp\n";
file_put_contents($logfile, $logdata, FILE_APPEND);

// Set header gambar
header('Content-Type: image/gif');

// Output gambar transparan 1x1
echo base64_decode(
    'R0lGODlhAQABAIABAP///wAAACwAAAAAAQABAAACAkQBADs='
);
?>
