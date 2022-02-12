<?php
$servername = "localhost";
$database = "kp_penyimpanan";
$username = "root";
$password = "";
 

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$mysqli = new mysqli($servername, $username, $password, $database);
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
    
}


?>