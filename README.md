# library_of_the_movies
<p>This applacation for saving info about the movies. It can run on a local server.<p>
<b>You can:</b>
<ul>
<li>Add new movie</li>
<li>Delete movie from database</li>
<li>See detail information about movie</li>
<li>Sort list with movies by alphabet</li>
<li>Search for a movie by title or actor</li>
<li>Sort list with movies by alphabet</li>
<li>Import movies from txt-list</li>
</ul>
<h2>Features</h2>
<ul>
<li>Easy data manipulation.</li>
<li>Concise interface</li>
<li>Supports PHP 5.6 and MySQL version 5.7 or higher</li>
</ul>
<h2>Installation</h2>
<p>For instalation you need a local server. You may to install WAMP, MAMP (only x64) or OpenServer.<br>
<h3>WAMP/MAMP</h3>
If you use a WAMP or MAMP clone this app in dir 'www' (for example, wamp/www). This application must be located at www/library_of_the_movies.<p>
<p>Then start your localserver and type in browser <b>'localhost/library_of_the_movies'</b>. During first start app will automatically create the database 'moviedb' with table 'movies' where will be save all info.</p>
<h3>OpenServer</h3>
<p>Clone app in dir <b>'openserver/domains/localhost'</b>.</p> <br><blockquote><b>Warning!</b> Before start open file <b>connection.php</b> in dir <b>'library_of_the_movies'</b> and change <b>'$username = "root";'</b> to <b>'$username = "mysql";'</b> and <b>'$password = "";'</b> to <b>'$password = "mysql";'</b>.</blockquote>
<p>In this app used default username and password to mysql ($username = "root" and $password = ""). If you have another 'Username' and 'Password', please change <b>$username</b> and <b>$password</b> in <b>connection.php</b>. If you want to use your database, you may to change databasename in <b>$dbname</b> of <b>connection.php</b>.</p>

<p>Created with love specially for WebbyLab:)</p>
