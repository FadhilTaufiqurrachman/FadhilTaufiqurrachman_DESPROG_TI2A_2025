<?php
session_start();

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_unset();    
    session_destroy();  
    
    setcookie('remember_me', '', time() - 3600, "/"); 
    
    header('Location: index.php'); 
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $keepLogged = isset($_POST['keep-logged']); 

    if ($username === 'dosen' && $password === 'dosen123') {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        if ($keepLogged) {
            setcookie('remember_me', 'dosen_loggedin', time() + (86400 * 30), "/"); 
        }

        echo json_encode(['status' => 'success', 'redirect' => 'dashboard.php']);

    } else {
        echo json_encode(['status' => 'error', 'message' => 'Username Atau Password Salah!']);
    }
    
    exit; 
}

header('Location: index.php');
exit;