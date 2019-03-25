<?php
/**
 * Created by PhpStorm.
 * User: fedje
 * Date: 17-3-2019
 * Time: 19:15
 */

/*
 * Hier checken we of de gebruiker inderdaad is ingelogd ( $_SESSION['id'] wordt alleen aangemaakt
 * als het inloggen in de logincontroller goed is gegaan, neem maar even een kijkje daar.
 * Is dat niet zo, dan helaasch, mag je niet deze site bekijken!
 */

require 'header.php';

if (!isset($_SESSION['id'])) {
    header("location: login.php?msg=idNotSetted");
}

?>
<div class="text">
    <h1>Welcome to AMO's special <span><a href="hi.php">s</a></span>educe Page ;{)</h1>
    <div class="app_image"><img src="./img/how_it_looks.jpg" alt="App Image"></div>
    <div class="downloadable_file_div">
        <?php
            if (isset($_SESSION['id']))
            {
                echo "<a class='downloadable_file' href='img/photo-1531804055935-76f44d7c3621.jpg' download>Download A Virus :D</a>";
            }
        ?>
    </div>
</div>
<?php require 'footer.php'; ?>