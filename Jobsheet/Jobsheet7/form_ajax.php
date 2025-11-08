<!DOCTYPE html>
<html>
    <head>
        <title>Contoh Form Dengan PHP Dan jQuery</title>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    </head>
    <body>
        <h2>Form Contoh (AJAX)</h2>
        <form id="myForm">
            <label for="buah">Pilih Buah : </label>
            <select name="buah" id="buah">
                <option value="Apel">Apel</option>
                <option value="Pisang">Pisang</option>
                <option value="Mangga">Mangga</option>
                <option value="Jeruk">Jeruk</option>
            </select>
            <br>

            <label>Pilih Warna Favorit : </label><br>
            <input type="checkbox" name="warna[]" value="Merah"> Merah <br>
            <input type="checkbox" name="warna[]" value="Biru"> Biru <br>
            <input type="checkbox" name="warna[]" value="Hijau"> Hijau <br>
            <br>

            <label>Pilih Jenis Kelamin :</label><br>
            <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki <br>
            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan <br>
            <br>

            <input type="submit" value="Submit">
        </form>
        
        <hr>
        <div id="hasil">
            <!-- Hasil Akan Ditempatkan Di Sini -->
        </div>

        <script>
            $(document).ready(function () { 
                $("#myForm").submit(function (e) { 
                    e.preventDefault(); 
                
                    var formData = $("#myForm").serialize(); 
                    
                    $.ajax({ 
                        url: "proses_lanjut.php",
                        type: "POST", 
                        data: formData, 
                        success: function (response) { 
                            $("#hasil").html(response);
                        }
                    });
                });
            });
        </script>
    </body>
</html>