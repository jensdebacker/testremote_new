<?php
require_once "autoload.php";

session_start();
LogLogoutUser();

session_destroy();
unset($_SESSION);

session_start();
session_regenerate_id();
$_SESSION["msg"][] = "U bent afgemeld!";
header("Location: " . $_application_folder . "/login.php");
?>