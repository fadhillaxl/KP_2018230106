<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$username = $_POST['user'];
$password = $_POST['password'];

$sql = "INSERT INTO admin1(level, nama,username,password) VALUES('1','$nama','$username','$password')";

$result = $mysqli->query($sql) ;

// mysqli_query($koneksi,"UPDATE barang set id_barang='$id', nama_barang='$namab', qc_prog='$qc',jumlah_barang='$jml',hrg_stn='$hargab',tgl_msk='$date' where id_barang='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../userdata.php");
 
?>