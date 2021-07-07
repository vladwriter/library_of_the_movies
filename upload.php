<?php
require ("connection.php");

if(isset($_FILES['file'])){
  $errors = array();
  $file = $_FILES['file'];
  $file_name = $_FILES['file']['name'];
  $file_size = $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];
  $file_type = $_FILES['file']['type'];

  if($file_type !== 'text/plain') die('Not the correct file format, please upload file in txt-format');

  $fp = file_get_contents(
    $file_tmp, FALSE, NULL, 23
  );

  $fpArr = explode("\n", $fp);
  
  $titles = array();
  $years = array();
  $format = array();
  $stars = array();

  for($i=0; $i<count($fpArr); $i++){
          $newStr = explode(":", $fpArr[$i]);
          if($newStr[0] === 'Title'){
               array_push($titles, $newStr[1]);
             }
             if($newStr[0] === 'Release Year'){
               array_push($years, $newStr[1]);
             }
             if($newStr[0] === 'Format'){
             array_push($format, $newStr[1]);
             }
             if($newStr[0] === 'Stars'){
               array_push($stars, $newStr[1]);
             }
             
    }
    foreach($titles as $key=>$val){
    $sql = "INSERT INTO movies (title, release_year, format, stars) VALUES ('$titles[$key]', '$years[$key]','$format[$key]', '$stars[$key]')";
    if($conn->query($sql)){
      echo "New movie" .$titles[$key]. "was created!<br>";}
  }  

    if($conn->query($sql)){
      echo "New movies were created!";
  } else{
      echo "<div class='uk-alert-danger' uk-alert>
      <a class='uk-alert-close' uk-close></a>
      <p>This Title is already in the table. Please enter a unique Title!</p>
     </div>";
  }

 if(empty($errors) == true){
  echo "Success";
}else{
  print $errors;
}

}

echo "<br><p class='uk-margin-left'><a href='index.php'>Return to the main page</p></a>";
?>