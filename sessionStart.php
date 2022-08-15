<?php

session_start();

$id = 0;

$link = mysqli_connect("localhost", "root", "",);

$sql = "CREATE DATABASE IF NOT EXISTS todo";
mysqli_query($link, $sql);

mysqli_select_db($link, "todo");

$sql = "CREATE TABLE IF NOT EXISTS tasks( task varchar(255) NOT NULL )";
mysqli_query($link, $sql);

$sql = "CREATE TABLE IF NOT EXISTS tasksComp( task varchar(255) NOT NULL )";
mysqli_query($link, $sql);

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