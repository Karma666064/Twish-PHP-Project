<?php
function showProfilePage() {
    global $base_url;
    $title = 'Profile';
    $css = 'css/style_profile.css';
    $js = false;

    ob_start();
?>
    <main>
        <h2>Profile</h2>
    </main>
<?php 
    $content = ob_get_clean();
    require "layout.php";
}
?>