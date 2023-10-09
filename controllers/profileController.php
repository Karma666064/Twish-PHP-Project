<?php 

function showProfile () {
    global $isConnected;
    
    if ($isConnected) showProfilePage();
    else showHomePage();
}
?>