<?php
for($i = 0; $i < sizeof($_SESSION['tasksListComp']); $i++)
{
    require("taskListComp.php");
}
?>