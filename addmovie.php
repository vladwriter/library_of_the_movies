<?php

require ("connection.php");

if (empty($_POST['title'])) exit("Please, write name of the movie");
if (empty($_POST['year'])) exit('You forgot to add release year');
if (empty($_POST['stars'])) exit('Please, add main actors');

$title = trim($_POST['title']);
$year = $_POST['year'];
$format = $_POST['format']; 
$stars = trim($_POST['stars']);

$title = str_replace("'", "&apos;", $title);
$title = str_replace('"', "&quot;", $title);
$stars = str_replace("'", "&apos;", $stars);
$stars = str_replace('"', "&quot;", $stars);

if(empty($title)||empty($stars)) die('Field TITLE or ACTORS is empty! Please add correct title and actors');

 $sql = "INSERT INTO movies (title, release_year, format, stars) VALUES ('$title','$year','$format', '$stars')";
 if($conn->query($sql)){
     echo "New movie was created!";
 } else{
     echo "Error: " . $conn->error;
 }

 echo"<br><a href='index.php'>Return to the main page</a>"

?>
