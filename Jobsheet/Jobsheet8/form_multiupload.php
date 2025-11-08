<!DOCTYPE html>
<html>
    <head>
        <title>MultiUpload Dokumen</title>
    </head>
    <body>
        <!-- <h2>Unggah Dokumen</h2>
        <form action="proses_upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx">
            <input type="submit" name="submit" value="Unggah">
        </form> -->

        <h2>Unggah Gambar</h2>
        <form action="proses_upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="gambar[]" multiple="multiple" accept=".jpg, .png, .jpeg">
            <input type="submit" name="submit" value="Unggah">
        </form>
    </body>
</html>