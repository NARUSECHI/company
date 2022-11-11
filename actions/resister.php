<?php
include "../classes/User.php";

//Create on object based on the User class
$user = new User();

//Callng the metod
$user->store($_POST);
?>