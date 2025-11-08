<!DOCTYPE html>
<html>
    <head>
        <title>Contoh Form Dengan PHP</title>
    </head>
    <body>
        <h2>Form Contoh</h2>
        <form method="post" action="proses_lanjut.php">
            <label for="buah">Pilih Buah : </label>
            <select name="buah" id="buah">
                <option value="Apel">Apel</option>
                <option value="Pisang">Pisang</option>
                <option value="Mangga">Mangga</option>
                <option value="Jeruk">Jeruk</option>
            </select>
            <br>

            <label for="warna">Pilih Warna Favorite : </label> <br>
            <input type="checkbox" name="warna[]" value="Merah"> Merah <br>
            <input type="checkbox" name="warna[]" value="Biru"> Biru <br>
            <input type="checkbox" name="warna[]" value="Hijau"> Hijau <br>
            <br>
            
            <label for="jeniskelamin">Pilih Jenis Kelamin</label> <br>
            <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-Laki <br>
            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan <br>
            <br>

            <input type="submit" value="Submit">
        </form>
    </body>
</html>