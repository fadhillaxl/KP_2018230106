<?php
require "koneksi.php";




$data1;
$sqlsup ="SELECT * FROM suplier WHERE id_suplier = '$id'";
$result0 = $mysqli->query($sqlsup);
while($row = $result0->fetch_array(MYSQLI_ASSOC)){
    $data1=$row['nama_suplier'];
    $data2 = $row['id_suplier'];
}

$sql = "SELECT h.terima FROM barang b INNER JOIN suplier s ON s.id_suplier=b.id_suplier 
                                INNER JOIN hqc h ON b.id_barang=h.id_barang WHERE s.id_suplier = '$id'";
$result = $mysqli->query($sql);
$terima=0;

while($row = $result-> fetch_array(MYSQLI_ASSOC)){
    
    $data = $row['terima'];
    $terima += $data;
    
    
    
    
}



$sql = "SELECT h.tolak FROM barang b INNER JOIN suplier s ON s.id_suplier=b.id_suplier 
                                INNER JOIN hqc h ON b.id_barang=h.id_barang WHERE s.id_suplier = '$id'";
$result = $mysqli->query($sql);
$tolak=0;

while($row = $result-> fetch_array(MYSQLI_ASSOC)){
    
    $data = $row['tolak'];
    $tolak += $data;
    
    
    
    
}


// $sql = "SELECT terima FROM hqc ";
// $result = $mysqli->query($sql);
// while($row = $result-> fetch_array(MYSQLI_ASSOC)){
    
//     $data = $row['terima'];
//     $total += $data;
    
    
    
// }
// echo $total;





?>