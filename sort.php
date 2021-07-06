<?php
require ("connection.php");
require_once ("create_table_movies.php");
require_once ("header.php");
?>
    <main>
    <div class='uk-margin-left'><a href="index.php">Sort by number in database</a></div>
            <?php
                  $sql = "SELECT * FROM movies ORDER BY BINARY(lower(title)) COLLATE  utf8_unicode_ci";
                require_once ("list.php");
                ?>
        </ul>
        </div>
    </main>

</body>

</html>