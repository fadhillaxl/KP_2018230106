<?php
include "koneksi.php";
$month = date("Y");
$kueri = mysqli_query($conn, "SELECT * FROM barang WHERE YEAR(tgl_msk) = $month");
$total = 0;

while (($row = mysqli_fetch_array($kueri)) != null){
    
    $stn = $row['hrg_stn'];
    $stk = $row['jumlah_barang'];
    $hasil = $stn * $stk;
    $total += $hasil;
}
echo $total;
                                                  
?>