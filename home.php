<?php
ob_start();

$config = parse_ini_file("config/settings.ini");
include("functions/functions.php");
require('antibots/autoload_obfs.php');
require_once("giant_wall.php");

pannel_session_start();
?>
