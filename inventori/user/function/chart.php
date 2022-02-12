<?php
include "koneksi.php";

$b = 1;

while($b < 12){

$kueri = mysqli_query($conn, "SELECT * FROM barang WHERE MONTH(tgl_msk) = $b");
                                                     
$data = array ();
$row = mysqli_fetch_array($kueri);
$hrg = $row['hrg_stn'];
$stn = $row['jumlah_barang'];
$total = $hrg * $stn;
echo ",";
echo $total;

$b++;
}



?>