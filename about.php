
<?php
require_once ("header.php");
echo "<a href='index.php'>Return to the list</a>";
if(isset($_GET["id"]))
{
    require ("connection.php");
    }
    $id = mysqli_real_escape_string($conn, $_GET["id"]);
    $sql = "SELECT * FROM movies WHERE id = '$id'";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            foreach($result as $row){
                $title = $row["title"];
                $year = $row["release_year"];
                $format = $row["format"];
                $stars = $row["stars"];
                echo "<div>
                        <h3>Information about movie</h3>
                        <p>Title: $title</p>
                        <p>Year: $year</p>
                        <p>Format: $format</p>
                        <p>Year: $stars</p>
                    </div>";
            }
        }
        else{
            echo "<div>No information about this movie</div>";
        }
        mysqli_free_result($result);
    } else{
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
</body>
</html>