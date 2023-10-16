<?php
function showFriendPage() {
    global $base_url;
    $title = 'Friend';
    $css = 'css/style_friend.css';
    $js = false;

    ob_start();
?>
    <main>
        <section class="friends-users">
            <h2  style="background-color: #ff0000">Users</h2>
            
            <!-- afficher tous les utilisateurs pour faire les demande d'amis -->
            <?php if (friendUsers()) foreach (friendUsers() as $user) echo showFriendUserSprite($user); ?>
        </section>

        <section class="friends-requests">
            <h2  style="background-color: #00ff00">Requests</h2>
            
            <?php
            if (friendsDataResquest() && count(friendsDataResquest()) > 0) foreach (friendsDataResquest() as $user) echo showFriendRequestSprite($user);
            else echo '<p>Aucune demande d\'amis</p>';
            ?>
        </section>

        <section class="my-friends">
            <h2  style="background-color: #0000ff">My Friends</h2>

            <?php if (friendsData()) foreach (friendsData() as $user) echo showFriendSprite($user); ?>
        </section>

        <!-- <?= showFriendSprite(); ?> -->
    </main>
<?php 
    $content = ob_get_clean();
    require "layout.php";
}
?>