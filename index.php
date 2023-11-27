<?php 
session_start();



require_once("app_config.php");
if(!isset($_SESSION['surveyorid'])){
    require_once("./pages/login.php");
} else {
    require_once("./components/index.php");
}
?>