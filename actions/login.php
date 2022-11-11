<?php
include "../classes/User.php";

//Create an Object based on the User class
$user= new User();

//Calling the method
$user->login($_POST);
