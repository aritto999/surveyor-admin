<?php

function dbHandler(){
    
    $dbh = new PDO("mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DBASE."",DB_USER, DB_PASS);
}

function login(string $uname, string $upass){
    $uname = htmlentities($uname);
    $upass = htmlentities($upass);

}