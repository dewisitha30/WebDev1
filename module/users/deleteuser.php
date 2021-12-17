<h1>HAPUS DATA USER</h1>
<?php
    require_once "config/koneksi.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id='$id'";
    $result = mysqli_query($db, $sql);

    if ($result) {
        echo"<script>
                alert('berhasil!');
            </script>";
            header("location:index.php?module=users");
    }else {
        echo "<script>
                        alert(\"Edit Data Gagal!\"  . mysqli_error);
                    </script>";
                    header("Location:../../index.php?module=" .$module ."&act=delete");
    }
?>