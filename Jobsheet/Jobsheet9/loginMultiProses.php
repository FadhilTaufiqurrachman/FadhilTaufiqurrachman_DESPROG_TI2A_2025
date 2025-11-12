<?php
    include "koneksi.php";
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query="SELECT * FROM user WHERE username = '$username' and password = '$password'";
    $result=mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if($row['level'] == 1){
        echo "Anda Berhasil login. Silahkan Menuju "; ?>
        <a href="homeAdmin.html">Halaman Home</a>
    <?php
    } else if($row['level'] == 2){
        echo "Anda Berhasil Login. Silahkan Menuju "; ?>
        <a href="homeGuest.html">Halaman Home</a>
    <?php
    } else{
        echo "Anda Gagal Login. Silahkan "; ?>
        <a href="loginForm.html">Login kembali</a>
    <?php
        echo mysqli_error($connect);
    }
?>