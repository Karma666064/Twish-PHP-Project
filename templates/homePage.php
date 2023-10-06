<?php
function showHomePage() {
    global $base_url;
    $title = 'Home';
    $css = 'css/style_home.css';
    $js = false;

    ob_start();
?>
    <main>
        <h2>Twish</h2>
        
        <div class="separator"></div>
        
        <section class="Posts">
            <?= showPostSprite(); ?>
        </section>
    </main>
<?php 
    $content = ob_get_clean();
    require "layout.php";
}
?>