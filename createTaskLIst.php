<?php
if(isset($_POST['addTask'])&&($_POST['newTaskInput']!=""))
{
    $input = $_POST['newTaskInput'];
    array_push($_SESSION['tasksList'], $input);

    $sql = "INSERT INTO tasks (task) VALUES ('$input')";
    mysqli_query($link, $sql);
}

$results = mysqli_query($link, "SELECT * FROM tasks");

$id = 0;

while ($row = mysqli_fetch_array($results))
{
    require("addTask.php");
    $id++;
}
?>