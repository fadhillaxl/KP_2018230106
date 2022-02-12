<?php
include "koneksi.php";

$year = date("Y") ;

$b = 1;

while($b <= 12){

$kueri = mysqli_query($conn, "SELECT * FROM barang WHERE MONTH(tgl_msk) = $b AND YEAR(tgl_msk) = $year ");
                                                     
$data = array ();
$row = mysqli_fetch_array($kueri);
$hrg = $row['hrg_stn'];
$stn = $row['jumlah_barang'];
$crt[$b] = $hrg * $stn;

$b++;
}



?>