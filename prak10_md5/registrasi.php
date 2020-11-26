<?php

include 'koneksi.php';
//ambil  nilai dari masing" inputan
$fullname = $_POST["fullname"];
$username = $_POST["username"];
$password = $_POST["password"];//plainteks
$password_md5 = md5($password);//tdk beraturan

    $sql = "INSERT INTO customer (fullname, username, password) VALUES ('$fullname', '$username', '$password_md5')";

        if($conn->query($sql) == TRUE){
            echo "New Record Created Successfully";
        }else{
            echo "Error : ". $sql . "<br>" . $conn->error;
        }

        $conn->close();
?>