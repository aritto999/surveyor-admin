<?php 
function load_view($view){
    if(file_exists($view)){
        require_once($view);
    } else {
        echo "<meta http-equiv='refresh' content='0; url=/405.html' />";
    }
}
$pages = isset($_GET['pages']) ? $_GET['pages'] : 'dashboard'; 

switch ($pages) {
    case 'logout': 
        session_destroy();
        echo "<meta http-equiv='refresh' content='0; url=/' />";
        break;
    case 'dashboard':
        load_view("./pages/dashboard.php");
        break;
    
    default:
        echo "<meta http-equiv='refresh' content='0; url=/404.html' />";
        break;
}
?>