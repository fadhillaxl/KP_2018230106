<?php 
    session_start();
    include 'koneksi.php';

 
    // menangkap data yang dikirim dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    // menyeleksi data pada tabel admin dengan username dan password yang sesuai
    $data = mysqli_query($conn, "SELECT * FROM admin1 WHERE username='$username' and password='$password'");
    
    
    
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
    
    if($cek > 0){
        $row = mysqli_fetch_assoc($data);
        
        if($row['level']=='0'){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['status'] = "login";
            header("location: ../index.php");
        }else if($row['level']=='1'){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['status'] = "login";
            header("location: ../user/index.php");
        }
        
    }
    else{
        header("location:../login.php");
        echo '<script type="text/javascript">';
        echo ' alert("login gagal")';  //not showing an alert box.
        echo '</script>';
    }
?>