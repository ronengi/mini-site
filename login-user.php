<?php

error_reporting(E_ALL);
/* error_reporting(E_ERROR | E_PARSE); */
ini_set('display_errors', true);
ini_set('html_errors', false);


require_once('UserManager.php');

//UserManager::loginUser("avram", "bbb");
UserManager::loginUser($_POST["username"], $_POST["password"]);

?>


