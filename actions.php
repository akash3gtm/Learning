<?php

if(isset($_POST['clear']))
{
    mysqli_query($link,"DELETE FROM tasks");
    session_destroy();
    header("location: index.php");
}

for($i = 0; $i < sizeof($_SESSION['tasksList']); $i++)
{
    if( isset($_POST['edit'.(string)$i]) || isset($_POST['completed'.(string)$i]) )
    {
        $task = $_SESSION['tasksList'][$i];
        array_splice($_SESSION['tasksList'], $i, 1);
        if( isset($_POST['edit'.(string)$i]) )
        {
            $_SESSION['edit']= $task;
        }
        else
        {
            array_push($_SESSION['tasksListComp'], $task);
        }
        header("location: index.php");
    }
}
?>