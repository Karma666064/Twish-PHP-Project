<?php
function showFriend () {
    global $isConnected;
    
    if ($isConnected) showFriendPage();
    else showHomePage();
}
?>