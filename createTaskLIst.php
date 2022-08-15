<?php

if(isset($_POST['addTask'])&&($_POST['newTaskInput']!=""))
{
    $input = $_POST['newTaskInput'];
    $sql = "INSERT INTO tasks VALUE ('$input')";
    mysqli_query($link, $sql);
}

$results = mysqli_query($link, "SELECT * FROM tasks");

$id = 0;

$_SESSION['tasksList'] = array();

while ($row = mysqli_fetch_array($results))
{
    array_push($_SESSION['tasksList'], $row['task']);
    require("addTask.php");
    $id++;
}
?>