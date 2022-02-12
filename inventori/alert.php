<?php
require "function/koneksi.php";

$sql ="SELECT jumlah_barang FROM barang WHERE id_barang = '$id'" ;
    $result = $mysqli->query($sql);

    alert($result);

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
    
}
?>