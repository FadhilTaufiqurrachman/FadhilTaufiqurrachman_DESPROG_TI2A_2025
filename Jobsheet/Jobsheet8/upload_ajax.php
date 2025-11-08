<?php
   if (isset($_FILES['file'])) {
      $errors = array();
      $file_name = $_FILES['file']['name'];
      $file_size = $_FILES['file']['size'];
      $file_tmp = $_FILES['file']['tmp_name'];
      $file_type = $_FILES['file']['type'];
      @$file_ext = strtolower("" . end(explode('.', $_FILES['file']['name'])) . "");
      $extensions = array("pdf", "doc", "docx", "txt");

      if (in_array($file_ext, $extensions) === false) {
         $errors[] = "Ekstensi File Yang Diizinkan Adalah PDF, DOC, DOCX, Atau TXT.";
      }

      if ($file_size > 2097152) {
         $errors[] = "Ukuran File Tidak Boleh Lebih Dari 2 MB";
      }

      if (empty($errors) == true) {
         move_uploaded_file($file_tmp, "documents/" . $file_name);
         echo "File Berhasil Diunggah.";
      } else {
         echo implode(", ", $errors);
      }
   }

   // $response_string = ""; 
   // if (isset($_FILES['file'])) {
   //    $target_dir = "uploads/"; 
   //    $allowed_extensions = array("jpg", "jpeg", "png", "gif");
   //    $max_size = 2097152; 

   //    $total_files = count($_FILES['file']['name']);

   //    for ($i = 0; $i < $total_files; $i++) {
   //       $file_name = $_FILES['file']['name'][$i];
   //       $file_tmp = $_FILES['file']['tmp_name'][$i];
   //       $file_size = $_FILES['file']['size'][$i];

   //       $targetFile = $target_dir . $file_name;
   //       $file_ext = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

   //       if (in_array($file_ext, $allowed_extensions) === false) {
   //             $response_string .= "Error : File $file_name (ekstensi $file_ext) Tidak Diizinkan.<br>";
   //             continue; 
   //       }
   //       if ($file_size > $max_size) {
   //             $response_string .= "Error : File $file_name Terlalu Besar (Maks 2MB).<br>";
   //             continue; 
   //       }

   //       if (move_uploaded_file($file_tmp, $target_dir . $file_name)) {
   //             $response_string .= "File Gambar $file_name Berhasil Diunggah.<br>";
   //       } else {
   //             $response_string .= "Gagal Mengunggah $file_name.<br>";
   //       }
   //    }
   // } else {
   //    $response_string = "Tidak Ada File Yang Dipilih.";
   // }
   // echo $response_string; 
?>