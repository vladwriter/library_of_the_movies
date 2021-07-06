<?php
    $sql = "CREATE TABLE movies(
            id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR (100) NOT NULL,
            release_year INT (4) NOT NULL,
            format VARCHAR (20) NOT NULL,
            stars VARCHAR (500) NOT NULL
          ) DEFAULT CHARSET=utf8";

      if($conn->query($sql)===TRUE){
           echo "<br>Table created successfully";
           };
?>