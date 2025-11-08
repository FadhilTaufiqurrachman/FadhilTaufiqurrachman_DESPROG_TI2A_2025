<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username=="admin" && $password=="1234"){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        echo "Anda Berhasil Login. Silahkan Menuju <a href='homeSession.php'>Halaman Home</a>";
    }
    else{
        echo "Gagal Login. Silahkan Login Lagi <a href='sessionLoginForm.html'>Halaman Login</a>";
    }
?>