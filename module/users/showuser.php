<div class="container">
    <div class="row">
        <h1>View User</h1>

        <?php
        require_once "config/koneksi.php";

        $sql = "SELECT * from users where id='$_GET[id]'";
        $result = mysqli_query($db, $sql);
        if($re = mysqli_fetch_array($result)){
            ?>
                <div class="input-group">
                    <label>Nama : <?php echo $re['nama'] ?></label>
                </div>
                <div class="input-group">
                    <label\>Email : <?php echo $re['email'] ?></label>
                </div>
                <div class="input-group">
                    <label>Hak Akses : <?php echo $re['hak_akses'] ?></label>
                </div>
                <?php
        }
        ?>
    </div>
</div>