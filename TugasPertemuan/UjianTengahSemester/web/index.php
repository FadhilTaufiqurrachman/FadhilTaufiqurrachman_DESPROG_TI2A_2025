<?php
session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
        header('Location: dashboard.php');
        exit;
    }
    if (isset($_COOKIE['remember_me']) && $_COOKIE['remember_me'] === 'dosen_loggedin') {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = 'dosen';
        header('Location: dashboard.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./asset/css/style.css">
        <title>Absensi Login</title>
    </head>
    <body>
        <main class="fade">
            <div class="container">
                <div class="login-section">
                    <h1>Halaman Login</h1>
                    <h5 align="center">Login Sebagai Dosen Untuk Mendapatkan Akses Absensi</h5> <br><br>
                    <form id="login-form" method="post" action="auth.php" novalidate>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="username" name="username" id="username" placeholder="Username">
                            <span id="username-error" class="error-text" style="color: red;"></span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="Password">
                            <span id="password-error" class="error-text" style="color: red;"></span>
                        </div>
                        <div class="form-footer">
                            <label class="keep-logged">
                                <input type="checkbox" id="keep-logged" name="keep-logged">
                                <span>Ingat Saya</span>
                            </label>
                            <a href="#" class="forgot-password">Lupa Password?</a>
                        </div>
                        <input type="submit" class="login-btn" value="Log In"></input>
                        <span id="not-valid" class="error-text" style="color: red; text-align: center; display: block; margin-top: 15px;"></span>
                    </form>
                </div>
                <div class="right-section">
                    <img src="./asset/img/login.png" alt="Login Illustration">
                </div>
            </div>
        </main>
        <script src="./asset/js/jquery-3.7.1.js"></script>
        <script src="./asset/js/login.js"></script>
    </body>
</html>