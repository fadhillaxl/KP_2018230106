<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['user'];
$password = $_POST['password'];

$sql = "UPDATE admin1 set nama='$nama', username='$username', password='$password' where id ='$id'";

$result = $mysqli->query($sql) ;

// mysqli_query($koneksi,"UPDATE barang set id_barang='$id', nama_barang='$namab', qc_prog='$qc',jumlah_barang='$jml',hrg_stn='$hargab',tgl_msk='$date' where id_barang='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../userdata.php");
 
?>