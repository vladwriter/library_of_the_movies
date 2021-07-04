<!DOCTYPE html>
<html>
<head>
    <title>Film Dump</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</head>
<body>
    <header>
        <nav class="uk-navbar-container" uk-navbar>
            <div class="uk-navbar-left uk-margin-left">
                <!-- This is a button toggling the modal -->
                <button class="uk-button uk-button-default uk-margin-small-right" type="button"
                    uk-toggle="target: #modal-example">Add movie</button>

                <!-- This is the modal -->
                <div id="modal-example" uk-modal>
                    <div class="uk-modal-dialog uk-modal-body">
                    <form method="post" action="addmovie.php">
                    <fieldset class="uk-fieldset">
                     <legend class="uk-legend">Add new movie</legend>
                    <div class="uk-margin">
                    <input class="uk-input" type="text" name="title" placeholder="Name of the movie">
                    </div>
                    <div class="uk-margin">
                    <input class="uk-input uk-form-width-small" type="text" name="year" placeholder="Release Year">
                    </div>
                    <div class="uk-margin uk-form-width-small">
                    <select class="uk-select" name="format">
                        <option>VHS</option>
                        <option>DVD</option>
                        <option>Blu-Ray</option>
                        </select>
                    </div>
                <div class="uk-margin">
                <textarea class="uk-textarea" name="stars" rows="3" placeholder="textarea"></textarea>
                </div>
                <div class="uk-margin">
                    <button class="uk-button uk-button-primary" type="submit" name="submit">Add movie</button>
                </div>
                </fieldset>             
                </form>
                    </div>
                </div>
            </div>
            <div class="uk-margin">
                <form enctype="multipart/form-data" method="POST" uk-form-custom="target: true">
                    <input  name="userfile" type="file">
                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Upload list" disabled>
                    <button type="submit" value="Upload" class="uk-button uk-button-default">Upload</button>
                </form>
            </div>
            <div class="uk-margin-right uk-navbar-right">


            <form name="search" method="post" action="search.php">
                <input type="search" name="query" placeholder="Search">
                <button type="submit">Search</button> 
            </form>
            </div>
        </nav>
    </header>