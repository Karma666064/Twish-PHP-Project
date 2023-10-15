<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- css -->
        <link rel="stylesheet" href="assets/css/style_global.css">
        <?php if ($title != 'Login') echo '<link rel="stylesheet" href="assets/css/style_nav.css">' ?>
        <link rel="stylesheet" href="assets/css/style_error.css">
        <link rel="stylesheet" href="assets/<?= $css ?>">

        <!-- Flaticon links -->
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
        
        <!-- Appel le fichier js si on est sur la page login -->
        <?php if ($js) echo '<script src="assets/'. $js .'" defer></script>' ?>

        <title>Twish - <?= $title ?></title>
    </head>

    <body>
        <?php if ($title != 'Login') echo showNavSprite(); ?>

        <?= $content ?>
    </body>
</html>