<?php
    $sql="CREATE DATABASE moviedb";
    if ($conn->query($sql) === FALSE) {
        echo "Error creating database: " . $conn->error;
    }
    //bool mysql_select_db( db_name, connection );
?>