<?php function showPostSprite($postData) { ob_start(); ?>

    <div class="post">
        <p class="author">Author : <?= $postData['username']; ?></p>
        <p class="pub-date">Publier le <?= $postData['creation_date']; ?></p>

        <p class="text"><?= $postData['text']; ?></p>
    </div>

<?php return ob_get_clean(); } ?>