<?php
require ("connection.php");
require_once ("create_table_movies.php");
require_once ("header.php");
?>
    <main>
    <div class='uk-margin-left'><a href="index.php">Sort by 123</a></div>
            <?php
                  $sql = "SELECT * FROM movies ORDER BY 
                  `title` ASC";
                require_once ("list.php");
                ?>
        </ul>
        </div>
    </main>

</body>

</html>