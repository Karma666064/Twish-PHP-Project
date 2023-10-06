<?php
function showFriendPage() {
    global $base_url;
    $title = 'Friend';
    $css = 'css/style_friend.css';
    $js = false;

    ob_start();
?>
    <main>
        <h2>Friend</h2>
    </main>
<?php 
    $content = ob_get_clean();
    require "layout.php";
}
?>