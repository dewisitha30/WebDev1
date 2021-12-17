<div class="container">
    <div class="row">
<?php
//session_start();
if(isset($_SESSION['email'])){
    header("Location:index.php");
}
    $aksi = "module/login/aksilogin.php";
?>
        <form action="<?php echo $aksi ?>" method="post">
            <h1>Login</h1>
            <div class="input">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="input">
                <button type="submit" name="submit" class="btn btn-success">Login</button>
            </div>
        </form>
    </div>
</div>