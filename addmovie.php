<?php

require ("connection.php");
require ("header.php");
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

$starsArr = explode("," , $stars);

$starsUnique = array_unique($starsArr, SORT_REGULAR);

$stars = implode(", ", $starsUnique);

if(empty($title)||empty($stars)) die('Field TITLE or ACTORS is empty! Please add correct title and actors');

 $sql = "INSERT INTO movies (title, release_year, format, stars) VALUES ('$title','$year','$format', '$stars')";
 if($conn->query($sql)){
     echo "New movie was created!";
 } else{
     echo "<div class='uk-alert-danger' uk-alert>
     <a class='uk-alert-close' uk-close></a>
     <p>This Title is already in the table. Please enter a unique Title!</p>
    </div>";
 }

 echo "<br><p class='uk-margin-left'><a href='index.php'>Return to the main page</p></a>";

?>
