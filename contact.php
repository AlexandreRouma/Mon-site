<?php
   session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <script src="javascript/scripts.js"></script>
        <link rel="icon" href="img/favicon.png" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="css/styles.css" rel="stylesheet">
        <title>Accueil</title>

    </head>

    <body>
        <header class="header">
            <nav class="menu">
                <a href="index.php" class="menu">Accueil</a>
                <a href="videos.php" class="menu">Videos</a>
                <a href="tutos.php" class="menu">Tutoriels</a>
            </nav>
            <nav class="menuContact">
                <a href="contact.php" class="contact_active">Contact</a>
            </nav>
        </header>
        <br>
        <div class="site_content">
            <div class="content">
                Veuillez entrer vos information puis cliquer sur Envoyer.<br><br>
                <?php
                    if(array_key_exists('errors', $_SESSION)): ?>
                        <div class="error">
                            <?= implode('<br>', $_SESSION['errors']); ?>
                        </div>
                <?php unset($_SESSION['errors']); endif; ?>
                <?php
                    if(array_key_exists('email_sent', $_SESSION)): ?>
                        <div class="no_error">
                            Email envoyé avec succès !
                        </div>
                <?php unset($_SESSION['email_sent']); endif; ?>
                <form action="post_contact.php" method="POST">
                    <div class="form-group">
                        <label for="send_name">Nom</label><br>
                        <input type="text" id="send_name" name="name" class="form-control" value="<?= isset($SESSION['inputs']['name']) ? $SESSION['inputs']['name'] : ''; ?>"><br><br>
                    </div>
                    <div class="form-group">
                        <label for="send_email">Email</label><br>
                        <input type="email" id="send_email" name="email" class="form-control" value="<?= isset($SESSION['inputs']['email']) ? $SESSION['inputs']['email'] : ''; ?>"><br><br>
                    </div>
                    <div class="form-mes-div">
                        <label for="send_message">Message</label><br>
                        <textarea id="send_message" name="message" class="form-message"><?= isset($SESSION['inputs']['name']) ? $SESSION['inputs']['message'] : ''; ?></textarea><br><br>
                    </div>
                    <button type="submit" class="send_the_message">Envoyer</button>
                </form>
            </div>
        </div>
    </body>
</html>

<?php
    unset($_SESSION['errors']);
    unset($_SESSION['inputs']);
    session_abort();
?>