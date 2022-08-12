<?php
for($i = 0; $i < sizeof($_SESSION['tasksListComp']); $i++)
{
    if( isset($_POST['delete'.(string)$i]) )
    {
        array_splice($_SESSION['tasksListComp'], $i, 1);
        header("location: index.php");
    }
}
?>