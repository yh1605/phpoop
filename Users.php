<?php
require("classes/User2.php");

$user = new User;

//call the select method
$result = $user->select();

foreach($result as $key => $row){
    echo $row['username'];
    echo "<br>";
}
?>