<?php 
require ("connection.php");
require ("header.php");
?>
<div class='uk-margin-left'><a href="index.php">Open all list</a></div>
<?php

$inputSearch = trim(htmlspecialchars($_REQUEST['search'])); 
$inputSearch = str_replace("'", "&apos;", $inputSearch);
$inputSearch = str_replace('"', "&quot;", $inputSearch);

$sql = "SELECT * FROM `movies` WHERE `title` = '$inputSearch' || `title` LIKE '%$inputSearch%' || `stars` LIKE '%$inputSearch%' || `stars` = '$inputSearch' || `release_year` = '$inputSearch' || `format` = '$inputSearch'";
 
$result = $conn -> query($sql);
function doesItExist(array $arr) {
    $data = array(
        'title' => $arr['title'] != false ? $arr['title'] : 'No info',
        'stars' => $arr['stars'] != false ? $arr['stars'] : 'No info',
        'release_year' => $arr['release_year'] != false ? $arr['release_year'] : 'No info'
    );
    return $data;
}
function countMovies($result) { 
    if ($result -> num_rows > 0) {
        while ($row = $result -> fetch_assoc()) {
            $arr = doesItExist($row);
            echo "id: ". $row['id'] ."<br>
                  Title: ". $row['title'] ."<br>
                  Release Year: ". $row['release_year'] ."<br>
                  Format: ". $row['format'] ."<br>
                  Actors: ". $arr['stars'] ."<br>";
        }
        } else {
        echo "No info about this movie";
    }
}
require ("list.php");
?>