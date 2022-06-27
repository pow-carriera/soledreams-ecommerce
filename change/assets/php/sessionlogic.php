<?php 
require_once("./config.php");
session_start(); 
if($_SESSION["loggedin"] == true) {
    $loggedin = true;
} else {
    $loggedin = false;
}?>