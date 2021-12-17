<div class="container">
    <div class="row">
        <h1>Tambah Data User</h1>
        <form class="createUsers" action="module/users/aksiuser.php?module=users&act=create" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="mb-3">
                <label for="hak_akses" class="form-label">Hak Akses</label>
                <div class="form-check">
                    <input type="radio" name="hak_akses" value="admin" id="radio1">
                    <label class="form-check-label" for="radio1">
                        Admin
                    </label>
                </div>
                <div class="form-check">
                    <input type="radio" name="hak_akses" value="user" checked id="radio2">
                    <label class="form-check-label" for="radio2">
                        User
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>