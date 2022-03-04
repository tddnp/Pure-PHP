<?php

include_once "src/User.php";
include_once "src/UserManager.php";

$index = $_REQUEST['id'];
$userManager = new UserManager('data.json');
$userManager->remove($index);
header('location: index.php');
