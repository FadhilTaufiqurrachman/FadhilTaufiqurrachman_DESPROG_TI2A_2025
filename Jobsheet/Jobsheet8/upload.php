<?php
    // if(isset($_POST["submit"])) {
    //     $targetdir = "uploads/";
    //     $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
        
    //     if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
    //         echo "File Berhasil Diunggah.";
    //     } else {
    //         echo "Gagal Mengunggah File.";
    //     }
    // }


    if(isset($_POST["submit"])) {
        $targetdir = "uploads/";
        $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
        $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));
        
        // $allowedExtensions = array("jpg", "jpeg", "png", "gif");
        // $maxsize = 5 * 1024 * 1024;
        
        $allowedExtensions = array("txt", "pdf", "doc", "docx");
        $maxsize = 3 * 1024 * 1024;
    
        if(in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxsize) {
            if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
                echo "File Berhasil Diunggah.";
                echo "<br><img src='$targetfile' width='200'>";
            } else {
                echo "Gagal Mengunggah File.";
            }
        } else {
            echo "File Tidak Valid Atau Melebihi Ukuran Maksimum Yang Diizinkan.";
        }
    }
?>