<?php
require ("connection.php");
require_once ("create_table_movies.php");
require ("header.php");
?>
<main>
    <div class='uk-margin-left'><a href="sort.php">Sort by abc</a></div>
        <?php
            $sql = "SELECT * FROM movies";
            require_once ("list.php");
        ?>
    </ul>
    </div>
</main>
</body>

</html>