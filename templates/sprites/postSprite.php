<?php function showPostSprite($postData) { ob_start(); ?>

    <div class="post">
        <p class="author">Author : <span><?= $postData['username']; ?></span></p>
        <p class="pub-date">Publier le <span><?= $postData['creation_date']; ?></span></p>

        <p class="text"><?= $postData['text']; ?></p>

        <form method="post">
            <textarea name="textareaComment" id="textareaComment" cols="30" rows="2" ></textarea>

            <input type="hidden" name="formType" value="createComment">
            <input type="hidden" name="idPost" value="<?= $postData['id_post']; ?>">

            <input type="submit" value="Add Comment">
        </form>

        <div class="comments">
            <?php 
            if (count(dataCommentByPost($postData['id_post'])) > 0) foreach (dataCommentByPost($postData['id_post']) as $dataComment) echo showCommentSprite($dataComment);
            ?>
        </div>
    </div>

<?php return ob_get_clean(); } ?>