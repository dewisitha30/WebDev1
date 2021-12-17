<div class="p-3 mb-2 bg-light text-dark">
    <h1>DATA USERS</h1>
    <a class="btn btn-primary" href="index.php?module=users&act=create">Tambah Data User</a>
    <br>
    <br>
    <table class="usersTabel">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Hak Akses</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            require_once "config/koneksi.php";
            $sql = "SELECT * from users";
            $result = mysqli_query($db, $sql);
            while($re = mysqli_fetch_array($result)){
                ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo"$re[nama]";?></td>
                <td><?php echo "$re[email]"; ?></td>
                <td><?php echo "$re[hak_akses]"; ?></td>
                <td>
                    <a href=<?php echo "index.php?module=users&act=show&id=$re[id]"?>>Show</a>
                    <a href=<?php echo "index.php?module=users&act=edit&id=$re[id]"?>>Edit</a>
                    <a href=<?php echo "index.php?module=users&act=delete&id=$re[id]"?>>Delete</a>
                </td>
            </tr>
            <?php
            }
        ?>
        </tbody>
    </table>
</div>