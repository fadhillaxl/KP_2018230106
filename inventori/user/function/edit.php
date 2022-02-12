<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['kode'];
$nama = $_POST['namab'];
$qc = $_POST['qcprog'];
$harga = $_POST['hargab'];
$jml = $_POST['jml'];
$tgl = $_POST['tgl'];

$sql = "UPDATE barang set id_barang='$id', nama_barang='$nama', qc_prog='$qc',jumlah_barang='$jml',hrg_stn='$harga',tgl_msk='$tgl' where id_barang='$id'";

$result = $mysqli->query($sql) ;

// mysqli_query($koneksi,"UPDATE barang set id_barang='$id', nama_barang='$namab', qc_prog='$qc',jumlah_barang='$jml',hrg_stn='$hargab',tgl_msk='$date' where id_barang='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../tables.php");
 
?>