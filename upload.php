<?php
if(isset($_FILES['file'])){
  $errors = array();
  $file = $_FILES['file'];
  $file_name = $_FILES['file']['name'];
  $file_size = $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];
  $file_type = $_FILES['file']['type'];

  if($file_type !== 'text/plain') die('Not the correct file format, please upload file in txt-format');

  $fp = fopen($file_tmp, 'r');

  $line= file($file_tmp);

  $trimmed = file($file_tmp, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

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