<?php

if(isset($_POST["id"]))
{
    require ("connection.php");
    if (!$conn) {
      die("Ошибка: " . mysqli_connect_error());
    }
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sql = "DELETE FROM movies WHERE id = '$id'";
    if(mysqli_query($conn, $sql)){  
        header("Location: index.php");
    } else{
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);     
}
?>