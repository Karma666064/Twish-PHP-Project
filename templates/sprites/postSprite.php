<?php function showPostSprite() { ob_start(); ?>

    <div class="post">
        <h2>Post title <span class="author">Auteur</span> <span class="pub-date">Publier le 25 / 11 / 2002</span></h2>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quia labore doloremque inventore, quos sequi dolorum consequatur dicta tempora! Deleniti.</p>
    </div>

<?php return ob_get_clean(); } ?>