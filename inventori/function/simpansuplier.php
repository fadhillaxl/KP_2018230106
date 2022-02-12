<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$id = $_POST['id_suplier'];

$sql = "INSERT INTO suplier(id_suplier, nama_suplier,Alamat) VALUES('$id','$nama','$alamat')";

$result = $mysqli->query($sql) ;

// mysqli_query($koneksi,"UPDATE barang set id_barang='$id', nama_barang='$namab', qc_prog='$qc',jumlah_barang='$jml',hrg_stn='$hargab',tgl_msk='$date' where id_barang='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../suplier.php");
 
?>