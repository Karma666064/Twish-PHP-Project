<?php function showNavSprite() { global $base_url; global $isConnected; ob_start(); ?>

<header>
    <nav>
        <h1>Twish</h1>

        <ul>
            <li><a href="<?= $base_url ?>">Home</a></li>
            <?php if ($isConnected) { ?>
                <li><a href="<?= $base_url ?>?page=friend">Friend</a></li>
                <li><a href="<?= $base_url ?>?page=profile">Profile</a></li>
                <li><a href="<?= $base_url ?>?page=logout">Logout</a></li>
            <?php } else echo "<li><a href=\"$base_url?page=login\">Login</a></li>"; ?>
        </ul>
    </nav>
</header>

<?php return ob_get_clean(); } ?>