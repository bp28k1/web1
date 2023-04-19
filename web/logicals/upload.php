<?php
if(isset($_FILES['image'])){
  $errors= array();
  $file_name = uniqid() . '.jpg'; // Generate a unique 8-character string and append the .jpg extension
  $file_size = $_FILES['image']['size'];
  $file_tmp = $_FILES['image']['tmp_name'];
  $file_type = $_FILES['image']['type'];
  $file_name_parts = explode('.', $_FILES['image']['name']);
  $file_ext = strtolower(end($file_name_parts));

  $extensions= array("jpeg","jpg","png");
  
  if(in_array($file_ext,$extensions)=== false){
     $errors[]="extension not allowed, please choose a JPEG or PNG file.";
  }
  
  if($file_size > 2097152) {
     $errors[]='File size must be less than 2 MB';
  }
  
  if(empty($errors)==true) {
     move_uploaded_file($file_tmp,"uploads/".$file_name);
     $uzenet = "Sikeres feltöltés!";
     $ujra = false;
     //echo "Success";
  }else{
     $uzenet = "Sikertelen feltöltés!";
     $ujra = true;
     //print_r($errors);
  }
}
?>
