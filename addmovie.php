<?php

require ("connection.php");

if (empty($_POST['title'])) exit("Please, write name of the movie");
if (empty($_POST['year'])) exit('You forgot to add release year');
if (empty($_POST['stars'])) exit('Please, add main actors');

$title = $_POST['title'];
$year = $_POST['year'];
$format = $_POST['format']; 
$stars = $_POST['stars'];

//  echo ($title);
//  echo ($year);
//  echo ($format);
//  echo ($stars);

 $sql = "INSERT INTO movies (title, release_year, format, stars) VALUES ('$title','$year','$format', '$stars')";
 if($conn->query($sql)){
     echo "New movie was created!";
 } else{
     echo "Error: " . $conn->error;
 }

 echo"<br><a href='http://localhost/filmsdump/?'>Return to the main page</a>"

?>
