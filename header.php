<!DOCTYPE html>
<html>
<head>
    <title>Film Dump</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.0/dist/css/uikit.min.css" />
<!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.0/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.0/dist/js/uikit-icons.min.js"></script>
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
                    <form method="post" action="<?php echo htmlspecialchars('addmovie.php');?>">
                    <fieldset class="uk-fieldset">
                     <legend class="uk-legend">Add new movie</legend>
                    <div class="uk-margin">
                    <input class="uk-input" type="text" name="title" placeholder="Title of the movie">
                    </div>
                    <div class="uk-margin">
                    <input class="uk-input uk-form-width-small" type="number" min="1850" max="2021" name="year" placeholder="Release Year">
                    </div>
                    <div class="uk-margin uk-form-width-small">
                    <select class="uk-select" name="format">
                        <option>VHS</option>
                        <option>DVD</option>
                        <option>Blu-Ray</option>
                        </select>
                    </div>
                <div class="uk-margin">
                <textarea class="uk-textarea" name="stars" rows="3" placeholder="Actors"></textarea>
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
            <form method="POST" action="upload.php" enctype="multipart/form-data">
                <input type="file" accept=".txt" name="file" />
                <input type="submit" name="upload" value="Upload" />
            </form>
            </div>
            <div class="uk-margin-right uk-navbar-right">


            <form action="search.php">
                <p>Type title of the movie or actor: <input type="text" name="search"> <input type="submit" value="Search"></p>
            </form>
            </div>
        </nav>
    </header>