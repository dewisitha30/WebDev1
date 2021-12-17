<div class="container">
    <div class="row">
        <h1>Edit Data User</h1>

<?php
require_once "config/koneksi.php";

$sql = "SELECT * from users where id='$_GET[id]'";
$result = mysqli_query($db, $sql);
if($re = mysqli_fetch_array($result)){
    ?>
    
        <form action="module/users/aksiuser.php?module=users&act=edit" method="post">
            <div class="input-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="<?php echo"$re[nama]"; ?>">
            </div>
            <br>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo"$re[email]"; ?>">
            </div>
            <br>
            <div class="input-group">
                <label for="hak_akses">Hak Akses</label>
                <input type="radio" name="hak_akses" value="admin"
                    <?php if($re['hak_akses']=='admin') echo 'checked'?>>Admin
                <input type="radio" name="hak_akses" value="user"
                    <?php if($re['hak_akses']=='user') echo 'checked'?>>User
            </div>
            <br>
            <div class="input-group">
                <input type="hidden" name="id" value="<?php echo $re['id']; ?>">
                <input type="submit" value="Edit" name="edit">
            </div>
            <?php
        }
        ?>
    </div>
</div>