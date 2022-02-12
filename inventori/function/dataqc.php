<?php
include "koneksi.php";
                                                    
$kueri1 = mysqli_query($conn, "SELECT qc_prog FROM barang");
$data2 = array ();
while (($row = mysqli_fetch_array($kueri1)) != null){
$data1[] = $row;
}
$trow = count($data1);
$AC = "ACCEPTED";

$kueri = mysqli_query($conn, "SELECT * FROM barang WHERE qc_prog = '$AC'"); 
$data = array ();
while (($row = mysqli_fetch_array($kueri)) != null){
$data[] = $row;
}
$cont = count($data);
$totalc = $cont/$trow *100;
// PENDING
$pending = "PENDING";

$kueri = mysqli_query($conn, "SELECT * FROM barang WHERE qc_prog = '$pending'"); 
$data = array ();
while (($row = mysqli_fetch_array($kueri)) != null){
$data[] = $row;
}
$cont = count($data);
$totalp = $cont/$trow *100;

// reject






?>