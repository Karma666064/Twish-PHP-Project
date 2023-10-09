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

        <p class="username">Username</p>

        <p class="mail">mail.random@gmail.com</p>

        <p class="birthday">25 / 11 / 2002</p>

        <!-- Pouvoir modifier les infos -->
    </main>
<?php 
    $content = ob_get_clean();
    require "layout.php";
}
?>