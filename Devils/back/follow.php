<?php
    include_once "backend.php";

    function get_followers($id_user)
    {
        global $bdd;

        $req_infos_followers = $bdd->prepare("SELECT *
FROM membres
LEFT JOIN follow ON membres.id_user = follow.id_user
WHERE follow.id_following = ?");
        $req_infos_followers->execute(array($id_user));

        return ($req_infos_followers->fetch());
    }

    function get_following($id_user)
    {
        global $bdd;

        $req_infos_following = $bdd->prepare("SELECT *
    FROM membres
    LEFT JOIN follow ON membres.id_user = follow.id_following
    WHERE follow.id_user = ?");
        $req_infos_following->execute(array($id_user));
        return ($req_infos_following->fetch());
    }