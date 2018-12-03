<?php
    require("classes/User2.php");
    $user = new User;
    $id = $_GET["id"];
    $deleteuser = $user->delete($id);
?>