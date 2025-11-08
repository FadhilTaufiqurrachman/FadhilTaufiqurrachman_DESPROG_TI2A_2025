<!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi (jQuery + AJAX)</title>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    </head>
    <body>
        <h1>Form Input Dengan Validasi (jQuery + AJAX)</h1>
        <form id="myForm">
            <label for="nama">Nama : </label>
            <input type="text" id="nama" name="nama">
            <span id="nama-error" style="color: red;"></span><br>
            
            <label for="email">Email :</label>
            <input type="text" id="email" name="email">
            <span id="email-error" style="color: red;"></span><br>

            <label for="password">Password : </label>
            <input type="password" id="password" name="password">
            <span id="password-error" style="color: red;"></span><br>
            <br>

            <input type="submit" value="Submit">
        </form>

        <hr>
        <div id="hasil">
            <!-- Hasil Akan Ditempatkan Di Sini -->
        </div>

        <script>
            $(document).ready(function() {
                $("#myForm").submit(function(event) { 
                    event.preventDefault();
                    
                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var password = $("#password").val();
                    var valid = true; 
        
                    if (nama === "") {
                        $("#nama-error").text("Nama Harus Diisi.");
                        valid = false;
                    } else {
                        $("#nama-error").text("");
                    }
                    
                    if (email === "") {
                        $("#email-error").text("Email Harus Diisi.");
                        valid = false;
                    } else {
                        $("#email-error").text("");
                    }

                    if (password === "") {
                        $("#password-error").text("Password Harus Diisi.");
                        valid = false;
                    } else if (password.length < 8) {
                        $("#password-error").text("Password Minimal 8 Karakter.");
                        valid = false;
                    } else {
                        $("#password-error").text("");
                    }
                    
                    if (valid) {
                        var formData = $("#myForm").serialize(); 
                        
                        $.ajax({ 
                            url: "proses_validasi.php",
                            type: "POST", 
                            data: formData, 
                            success: function (response) { 
                                $("#hasil").html(response);
                            }
                        });
                    }
                });
            });
        </script>
    </body>
</html>