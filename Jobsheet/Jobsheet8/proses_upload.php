<?php
    // $targetDirectory = "documents/";

    // if (!file_exists($targetDirectory)) {
    //     mkdir($targetDirectory, 0777, true);
    // }

    // if ($_FILES['files']['name'][0]) {
    //     $totalFiles = count($_FILES['files']['name']);

    //     for ($i = 0; $i < $totalFiles; $i++) { 
    //         $fileName = $_FILES['files']['name'][$i];
    //         $targetFile = $targetDirectory . $fileName;

    //         if(move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
    //             echo "File $fileName Berhasil Diunggah. <br>";
    //         } else {
    //             echo "Gagal Mengunggah File $fileName. <br>";
    //         }
    //     }
    // } else {
    //     echo "Tidak Ada File Yang Diunggah.";
    // }

    $targetDirectoryGambar = "uploads/";

    if (!file_exists($targetDirectoryGambar)) {
        mkdir($targetDirectoryGambar, 0777, true);
    }

    if ($_FILES['gambar']['name'][0]) {
        $totalFiles = count($_FILES['gambar']['name']);

        $allowedExtensions = array("jpg", "jpeg", "png", "gif");
        $maxsize = 5 * 1024 * 1024;

        for ($i = 0; $i < $totalFiles; $i++) { 
            $fileName = $_FILES['gambar']['name'][$i];
            $targetFile = $targetDirectoryGambar . $fileName;

            $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $fileSize = $_FILES['gambar']['size'][$i];

            if (in_array($fileType, $allowedExtensions) && $fileSize <= $maxsize) {
                if(move_uploaded_file($_FILES['gambar']['tmp_name'][$i], $targetFile)) {
                    echo "File $fileName Berhasil Diunggah. <br>";
                    echo "<br><img src='$targetFile' width='200'><hr>";
                } else {
                    echo "Gagal Mengunggah File $fileName. <br>";
                }
            }
        }
    } else {
        echo "Tidak Ada File Yang Diunggah.";
    }
?>