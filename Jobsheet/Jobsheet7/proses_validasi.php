<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
            $errors[] = "Format Email Tidak Valid.";
        }
        
        if (empty($errors)) {
            echo "Data berhasil dikirim : <br>
            Nama = $nama <br> 
            Email = $email <br>
            Password = $password";
        } else {
            foreach ($errors as $error) { 
                echo $error . "<br>";
            }
        }
    }
?>