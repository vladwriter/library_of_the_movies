<?php
    if($result = $conn->query($sql)){
                    $rowsCount = $result->num_rows;
                    echo "<div class='uk-text-primary uk-margin-left'>Count of the films: $rowsCount</div>
                            <div class='uk-flex'>
                            <ul class='uk-list uk-accordion uk-list-striped uk-margin-left uk-margin-top uk-width-xlarge'>";
                    foreach($result as $row){
                        echo "<li>
                        <div>" . $row["id"] .". ". $row["title"] . "</div>
                        <div><a href='about.php?id=" . $row["id"] . "'>More details</a></div>
                                <form action='delete.php' method='post'>
                                <input type='hidden' name='id' value='" . $row["id"] . "' />
                                <input type='submit' value='Delete'>
                                </form></td>
                            </li>";
                    }
                    $result->free();
                } else{
                    echo "Error: " . $conn->error;
                }
                $conn->close();
?>