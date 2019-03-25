<?php
    require 'includes/config.php';
?>

<!-- Even heel easy html code, omdat de focus nu op het inlogsysteem ligt en niet op fancy looks :)  -->
<html>
<head>
  <style>
    nav {
      display: flex;
      justify-content: flex-end;
    }
  </style>

  <meta charset="utf-8">

  <title>Amo Login System homepage</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>
<body>
<header>
    <div class="top-section">
        <div class="container">
            <?php
                if (!isset($_SESSION['id']))
                {
                    echo "<div></div>";
                    echo "<p class='login-register'><a href='login.php'> Login </a> &nbsp; or &nbsp; <a href='register.php'> Register </a></p>";
                }
                else
                {
                    echo "<p class='show-username'>Logged in as {$_SESSION['username']}";
                    echo "<form class='logout-form' action='includes/loginController.php' method='post'>
                          <input type='hidden' name='type' value='logout'>
                          <input type='submit' name='submit' id='submit' value='logout' class='logout-btn'>
                          </form>";
                }
            ?>
        </div>
    </div>
    <div class="main-section">
        <div class="container">
            <nav>
                <a href="index.php">Home</a>
                <?php
                    if (isset($_SESSION['id']))
                    {
                        echo "<a href='admin.php'>Admin Page</a>";
                    }
                ?>
            </nav>
        </div>
    </div>
        <?php
        /*
         * Hier checken we of we al ooit eens een 'id' key hebben opgeslagen in de
         * $_SESSION variabele. de ENIGE plek waar we dit doen is als we onszelf inloggen
         * en onze gegevens kloppen. Kijk maar in de logincontroller.php
         *
         * Als we dus al een id in onze session hebben (dus onze klant is al ingelogd) willen we niet dat onze
         * klanten zich nogmaals kunnen registreren of inloggen...
         *
         */
        ?>
    </nav>
    </div>
</header>
