<?php

session_start();
if(!(isset($_SESSION['edit']) ) ){
    $_SESSION['edit'] = "";
}
if(!isset($_SESSION['tasksList'])){
    $_SESSION['tasksList'] = array();
}

if(!isset($_SESSION['tasksListComp'])){
    $_SESSION['tasksListComp'] = array();
}

?>