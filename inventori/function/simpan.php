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
$sup = $_POST['id_suplier'];

$sql = "INSERT INTO barang (id_barang, nama_barang, qc_prog,jumlah_barang,hrg_stn,tgl_msk,id_suplier) VALUES('$id','$nama','$qc','$jml','$harga','$tgl','$sup')";

$result = $mysqli->query($sql) ;

$sql = "INSERT INTO hqc (id_barang,terima,tolak) VALUES('$id','0','0')";

$result = $mysqli->query($sql) ;
// mysqli_query($koneksi,"UPDATE barang set id_barang='$id', nama_barang='$namab', qc_prog='$qc',jumlah_barang='$jml',hrg_stn='$hargab',tgl_msk='$date' where id_barang='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../tables.php");
 
?>