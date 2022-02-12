<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$terima = $_POST['terima'];
$tolak = $_POST['tolak'];
$id = $_POST['kode'];
$qc = $_POST['qcprog'];

$sql ="SELECT jumlah_barang FROM barang WHERE id_barang = '$id'" ;
$result = $mysqli->query($sql);


    $sql = "UPDATE hqc set terima='$terima', tolak='$tolak' WHERE id_barang ='$id'";

    $result = $mysqli->query($sql) ;

$sql = "UPDATE barang set qc_prog = '$qc' WHERE id_barang='$id'";
$result = $mysqli->query($sql);
    
    header("location:../tables.php");




 
?>