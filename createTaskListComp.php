<?php

$results = mysqli_query($link, "SELECT * FROM tasksComp");

$id = 0;

$_SESSION['tasksListComp'] = array();

while ($row = mysqli_fetch_array($results))
{
    array_push($_SESSION['tasksListComp'], $row['task']);
    require("taskListComp.php");
    $id++;
}
?>