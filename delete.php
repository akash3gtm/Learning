<?php
for($i = 0; $i < sizeof($_SESSION['tasksListComp']); $i++)
{
    if( isset($_POST['delete'.(string)$i]) )
    {
        $task = $_SESSION['tasksListComp'][$i];
        $sql = "DELETE FROM tasksComp WHERE task = '$task'";
        mysqli_query($link,$sql);
        header("location: index.php");
    }
}
?>