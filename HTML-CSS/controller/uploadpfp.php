<?php

function uploadpfp($file){
    // File Properties
      $file_name = $file['name'];
      $file_tmp = $file['tmp_name'];
      $file_error = $file['error'];

      // File Extension
      $file_ext = explode('.', $file_name);
      $file_ext = strtolower(end($file_ext));

      // Allowed file types
      $allowed = array("jpg", "jpeg", "png");

      // File size validation
      if($file['size'] > 2097152) {
        header("location: ../views/loginsys/signup.php?error=toobig");
        exit();
      }
      // File type validation
      if(!in_array($file_ext, $allowed)){
        header("location: ../views/loginsys/signup.php?error=badformat");
        exit();
      }

      if($file_error === 0){
        $file_name_new = uniqid() . '.' . $file_ext;
        $file_destination = '/uploadspfp/' . $file_name_new;
        $result = move_uploaded_file($file_tmp, $file_destination);
        if ($result == true){
          return $file_destination;
        } else {
          header("location: ../views/loginsys/signup.php?error=uploaderr");
          exit();
        }
      }
}
      