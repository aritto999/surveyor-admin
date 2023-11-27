<?php 
session_start();
date_default_timezone_set("Asia/Makassar");

require_once("app_config.php");
if(!isset($_SESSION['surveyor_id'])){
    require_once("./pages/login.php");
} else {
    require_once("./components/index.php");
}
?>