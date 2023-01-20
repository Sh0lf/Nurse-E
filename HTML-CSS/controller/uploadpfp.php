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
      $allowed = array("jpg", "jpeg", "png", "webp");

      // File size validation
      if($file['size'] > 2097152) {
        return "toobig";
      }
      // File type validation
      if(!in_array($file_ext, $allowed)){
        return "badformat";
      }

      if($file_error == 0){
        $file_name_new = uniqid('',true) . '.' . $file_ext;
        $file_destination = $_SERVER['DOCUMENT_ROOT'].'/uploadspfp/' . $file_name_new;

        $result = move_uploaded_file($file_tmp, $file_destination);

        $file_final_destination = explode('/', $file_destination);
        $file_final_destination = "/uploadspfp/".strtolower(end($file_final_destination));

        if ($result == true){
          return $file_final_destination;
        } else {
          return false;
        }
      }
}
      