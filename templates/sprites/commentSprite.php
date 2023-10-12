<?php function showCommentSprite($commentData) { ob_start(); ?>

<div class="comment">
    <p class="username"><?= $commentData['username']; ?> <span class="creation-date"><?= $commentData['creation_date']; ?></span></p>

    <p class="text"><?= $commentData['text']; ?></p>
</div>

<?php return ob_get_clean(); } ?>