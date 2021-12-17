<?php
require_once "../../config/koneksi.php";
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($db, $sql);
    if($result -> num_rows >0){
        //berhasil login
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['email']=$row['email'];
        header("Location:../../index.php");
    }
    else{
        //kembali ke form login
        //echo "<script>alert('Email atau Password salah. Silahkan ulang kembali.')</script>";
        header("Location:../../index.php");
    }
}
?>