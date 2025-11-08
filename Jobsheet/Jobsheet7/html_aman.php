<!DOCTYPE html>
<html>
    <head>
        <title>Uji Coba Keamanan HTML</title>
    </head>
    <body>
        <h2>Formulir Input</h2>
        <p>Coba Masukkan Teks Yang Mengandung Spesial Characters, Misalnya <strong>&lt;script&gt;alert('Tes')&lt;/script&gt;</strong></p>
        <form method="POST" action="html_aman.php">
            <label for="input">Masukkan Teks:</label>
            <input type="text" id="input" name="input" size="50">
            <input type="submit" value="Kirim">
        </form>
        <hr>

        <h2>Formulir Pengecekan Email</h2>
        <p>Masukkan Email Untuk Divalidasi</p>

        <form method="POST" action="html_aman.php">
            <label for="email">Email :</label>
            <input type="text" id="email" name="email" size="50">
            <input type="submit" value="Cek Validasi">
        </form>

        <hr>

        <?php
            if (isset($_POST['input'])) {  
                $input = $_POST['input'];
                
                $input_aman = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
                
                echo "<h3>Data Asli Yang Diterima : </h3>";
                echo "<pre>" . $input_aman . "</pre>"; 
                
                echo "<h3>Data Ditampilkan Langsung (Tidak Aman) : </h3>";
                echo $input; 
                
                echo "<h3>Data Ditampilkan Setelah 'htmlspecialchars' (Aman) : </h3>";
                echo $input_aman;
            }

            if (isset($_POST['email'])) {
                $email = $_POST['email'];
                $email_aman = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
                echo "<p>Email Yang Anda Masukkan : <strong>" . $email_aman . "</strong></p>";

                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<p><strong>Format Email Tersebut Valid.</strong></p>";

                } else {
                    echo "<p><strong>Format Email Tersebut Tidak Valid.</strong></p>";
                }
            }
        ?>
    </body>
</html>