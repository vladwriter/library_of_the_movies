<?php
if(isset($_FILES['file'])){
  $errors = array();
  $file = $_FILES['file'];
  $file_name = $_FILES['file']['name'];
  $file_size = $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];
  $file_type = $_FILES['file']['type'];

  $expensions = array("txt");
  

  if(empty($errors) == true){
    echo "Success";
  }else{
    print $errors;
  }

  $sql = "
    LOAD DATA INFILE '$file'
    INTO TABLE 'movies'
    LINES STARTING BY 'Title:'||'Release Year:'||'Format:'||'Stars:'
    IGNORE 1 LINES
";
}
?>