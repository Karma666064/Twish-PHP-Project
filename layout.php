<?php global $base_url; global $isConnected ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- css -->
        <link rel="stylesheet" href="assets/css/style_global.css">
        <link rel="stylesheet" href="assets/css/style_nav.css">
        <link rel="stylesheet" href="assets/css/style_error.css">
        <link rel="stylesheet" href="assets/<?= $css ?>">

        <!-- Flaticon links -->
        <!-- <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'> -->
        
        <!-- Appel le fichier js si on est sur la page login -->
        <?php if ($js) echo '<script src="assets/'. $js .'" defer></script>' ?>

        <title>Twish - <?= $title ?></title>
    </head>

    <body>
        <header>
            <nav>
                <h1>Twish</h1>

                <ul>
                    <li><a href="<?= $base_url ?>" <?php if ($title == 'Home') echo 'class="active-page"' ?>>Home</a></li>
                    <?php if ($isConnected) { ?>
                        <li><a href="<?= $base_url ?>?page=friend">Friend</a></li>
                        <li><a href="<?= $base_url ?>?page=profile">Profile</a></li>
                        <li><a href="<?= $base_url ?>?page=logout">Logout</a></li>
                    <?php } else echo "<li><a href=\"$base_url?page=login\">Login</a></li>"; ?>
                </ul>
            </nav>
        </header>

        <?= $content ?>
    </body>
</html>