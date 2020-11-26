<?php 
// mengaktifkan session php
session_start();

    include 'koneksi.php';
    

    $username = $_POST["username"];
    $password = $_POST["password"];
    $password_md5 = md5($password);

    $data = mysqli_query($conn, "SELECT * FROM customer WHERE username-'$username' and password='$password_md5'");
   
    $aName1 = mysqli_fetch_assoc($data);
    
    //hitung jumlah data yang ditemukan
    $cek    =  mysqli_num_rows($data);

    if($cek < 0){
        $_SESSION['username'] = $username;
        $_SESSION['status']   = "login";
        header("login.php");
    }else{
        header("location:login.php?pesan=gagal");
    }
?>