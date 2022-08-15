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
        $sql = "DELETE FROM tasks WHERE task = '$task'";
        mysqli_query($link,$sql);
        
        if( isset($_POST['edit'.(string)$i]) )
        {
            $_SESSION['edit']= $task;
        }
        else
        {
            $sql = "INSERT INTO tasksComp VALUE ('$task')";
            mysqli_query($link,$sql);
        }
        header("location: index.php");
    }
}
?>