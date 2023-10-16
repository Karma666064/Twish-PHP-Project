<?php function showPostSprite($postData) {
    global $isConnected;
    
    if ($isConnected) {
        $dataLike = dataLike($_SESSION['user']['id_user'], $postData['id_post']);

        if (count($dataLike) > 0 && $dataLike[0]['liked']) {
            $action = 'remove';
            $heart = 'sr-heart';
        } elseif (count($dataLike) < 1 || !$dataLike[0]['liked']) {
            $action = 'add';
            $heart = 'rr-heart';
        }
    }

    ob_start();
?>

    <div class="post">
        <a href="?page=like&action=<?= $action ?>&id_status=<?= $postData['id_post'] ?>"><i class="fi fi-<?= $heart ?>"></i></a>

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