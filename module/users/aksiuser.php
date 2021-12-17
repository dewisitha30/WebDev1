<?php
    require_once "../../config/koneksi.php";

    session_start();
    $module = null;
    $act = null;
    $id = null;
    if(isset($_GET['module'])){
        $module = $_GET['module'];
    }
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    if(!isset($_SESSION['email'])){
        header("Location:../../index.php");
    }
    else{
        if($module=="users" and $act="create"){
          $pass = md5($_POST['password']);
          $nama = $_POST['nama'];
          $email = $_POST['email'];
          $hak_akses = $_POST['hak_akses'];

          $sql = "INSERT INTO users (   nama,
                                        email,
                                        password,
                                        hak_akses)
                                values ('$nama',
                                        '$email',
                                        '$pass',
                                        '$hak_akses')";
          $result = mysqli_query($db, $sql);
            if ($result) {
                echo json_encode(array('success' => 1));
            }else {
                echo json_encode(array('success' => 0));
            }
        }
    }

    if(!isset($_SESSION['email'])){
        header("Location:../../index.php");
    }
    else{
        if($module=="users" and $act="edit" and isset($_POST['edit'])){
          $id = $_POST['id'];
          $nama = $_POST['nama'];
          $email = $_POST['email'];
          $hak_akses = $_POST['hak_akses'];

          $sql = "UPDATE users set nama = '$nama', email = '$email', hak_akses = '$hak_akses' where id='$id'";
          $result = mysqli_query($db, $sql);
          if ($result) {
            echo"<script>
                    alert('Berhasil!');
                </script>";
            header("location:../../index.php?module=".$module);
        }else {
            echo"<script>
                    alert('Gagal!');
                </script>";
            header("location:../../index.php?module=".$module . "&act=edit");
        }
        }
    }
?>