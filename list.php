<?php
    if($result = $conn->query($sql)){
                    $rowsCount = $result->num_rows;
                    echo "<div class='uk-text-primary uk-margin-left'>Count of the films: $rowsCount</div>
                            <div class='uk-flex'>
                            <ul class='uk-list uk-accordion uk-list-striped uk-margin-left uk-margin-top uk-width-xlarge'>";
                    $counter = 0;
                        foreach($result as $row){
                        $counter++;
                        echo "<li>
                        <div>". $counter .". ". $row["title"] . "</div>
                        <div><a href='about.php?id=" . $row["id"] . "'>More details</a></div>
                                <button uk-toggle='target: #modal-delete-".$row["id"]."' type='submit' value='Delete'>Delete</button> 
                            </li>
                            <div id='modal-delete-".$row["id"]."' uk-modal>
                            <form class='uk-modal-dialog uk-modal-body' action='delete.php' method='post'>
                                <p class='uk-text-large'>Do you really want to delete the movie <b><i>". $row["title"] . "</i></b>?</p>
                                <p class='uk-text-center'>
                                    <input type='hidden' name='id' value='" . $row["id"] . "' />
                                    <button class='uk-button uk-button-default uk-modal-close' type='button'>Cancel</button>
                                    <button class='uk-button uk-button-primary' type='submit' value='Delete'>Yes!</button>
                                </p>
                            </form>
                            </div>
                            ";
                    }
                    $result->free();
                } else{
                    echo "Error: " . $conn->error;
                }
                $conn->close();
?>

<!-- This is the modal -->
