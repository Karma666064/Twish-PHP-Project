<?php
function likeController() {
    global $base_url;

    print_r($_GET);
    if (isset($_GET["action"]) && isset($_GET["id_status"]) && isset($_SESSION["user"]) && ($_GET["action"] == "add" || $_GET["action"] == "remove")) {
        if ($_GET["action"] == "add") addLike($_SESSION["user"]["id_user"], $_GET["id_status"]);
        elseif ($_GET["action"] == "remove") removeLike($_SESSION["user"]["id_user"], $_GET["id_status"]);
        else echo "Erreur 404 - Action inconnue";
    }

    header("Location: $base_url");
}

?>