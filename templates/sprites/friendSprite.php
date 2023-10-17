<!-- Afficher ses amis -->
<?php function showFriendSprite ($dataFriend) {
    if ($dataFriend['id_user1'] == $_SESSION['user']['id_user']) {
        $idUser = $dataFriend['id_user2'];
        $username = $dataFriend['username2'];
        
    } elseif ($dataFriend['id_user2'] == $_SESSION['user']['id_user']) {
        $idUser = $dataFriend['id_user1'];
        $username = $dataFriend['username1'];
    }
    ob_start();
?>
<div class="friend">
    <h3><?= $username ?></h3>

    <a href="?page=friend&action=removeFriend&idFriend=<?= $idUser ?>">Remove Friend</a>
</div>
<?php return ob_get_clean(); };

// Afficher les utilisateurs avec qui on peut devenir amis
function showFriendUserSprite ($dataFriend) { ob_start(); ?>
<div class="friend-user">
    <h3><?= $dataFriend['username'] ?></h3>

    <a href="?page=friend&action=addFriend&idFriend=<?= $dataFriend['id_user'] ?>">Add Friend</a>
</div>
<?php return ob_get_clean(); };

// Affiche les demandes d'amis
function showFriendRequestSprite ($dataFriend) { ob_start(); ?>
<div class="friend-request">
    <h3><?= $dataFriend['username'] ?></h3>

    <a href="?page=friend&action=acceptFriend&idFriend=<?= $dataFriend['id_user'] ?>">Accept</a>
    <a href="?page=friend&action=removeFriend&idFriend=<?= $dataFriend['id_user'] ?>">Delete</a>
</div>
<?php return ob_get_clean(); } ?>