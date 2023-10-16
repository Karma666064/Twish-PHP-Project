<?php
function showFriend () {
    global $isConnected;
    
    if ($isConnected) {
        if (isset($_GET['action']) && isset($_GET['idFriend'])) {
            switch ($_GET['action']) {
                case 'addFriend':
                    friendResquestAdd($_GET['idFriend']);
                    break;
                case 'acceptFriend':
                    friendResquestAccept($_GET['idFriend']);
                    break;
                case 'removeFriend':
                    friendRemove($_GET['idFriend']);
                    break;
            }
        }
        showFriendPage();

    } else showHomePage();
}
?>