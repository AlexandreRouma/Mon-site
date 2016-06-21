<!DOCTYPE html>
<html>

    <head>
        <script src="javascript/scripts.js"></script>
        <link rel="icon" href="img/favicon.png" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="css/styles.css" rel="stylesheet">
        <title>Leds</title>

    </head>

    <body>
        <header class="header">
            <nav class="menu">
                <a href="index.php" class="menu">Accueil</a>
                <a href="videos.php" class="menu">Videos</a>
                <a href="tutos.php" class="menu">Tutoriels</a>
            </nav>
            <nav class="menuContact">
                <a href="contact.php" class="contact">Contact</a>
            </nav>
        </header>
        <br>
        <div class="site_content">
            <div class="content">
                <input type="button" value="ON" onclick="ledON();"></input><br>
				<input type="button" value="OFF" onclick="ledOFF();"></input>
            </div>
        </div>
    </body>
</html>
