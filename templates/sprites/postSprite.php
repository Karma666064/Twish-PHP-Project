<?php function showPostSprite($postData) { ob_start(); ?>

    <div class="post">
        <p class="author">Author : <span><?= $postData['username']; ?></span></p>
        <p class="pub-date">Publier le <span><?= $postData['creation_date']; ?></span></p>

        <p class="text"><?= $postData['text']; ?></p>
    </div>

<?php return ob_get_clean(); } ?>