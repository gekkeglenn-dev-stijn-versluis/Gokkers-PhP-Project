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

<h1>Welcome to AMO Login system Admin Page </h1>
<p>Still nothing special to see here but that's not the point.</p>
<p>you can only get here while being logged in. Try to close your browser and you'll that you are still logged in!</p>
<?php
    if (isset($_SESSION['id']))
    {
        echo "<a class='downloadable_file' href='img/photo-1531804055935-76f44d7c3621.jpg' download>Download A Virus :D</a>";
    }
?>

<?php require 'footer.php'; ?>