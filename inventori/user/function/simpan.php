<?php 
// koneksi database
include 'koneksi.php';


$id = $_POST['kode'];
$nama = $_POST['namab'];
$qc = $_POST['qcprog'];
$harga = $_POST['hargab'];
$jml = $_POST['jml'];
$tgl = $_POST['tgl'];
// menangkap data yang di kirim dari form

$sql = "INSERT INTO barang(id_barang, nama_barang, jumlah_barang, tgl_msk, hrg_stn, qc_prog)
VALUES ('$id', '$nama', '$jml', '$tgl', '$harga' ,'$qc')";

$result = $mysqli->query($sql);

// mysqli_query($koneksi,"UPDATE barang set id_barang='$id', nama_barang='$namab', qc_prog='$qc',jumlah_barang='$jml',hrg_stn='$hargab',tgl_msk='$date' where id_barang='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../tables.php");
 
?>