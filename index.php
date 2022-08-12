<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="main.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>To Do List</title>
        
    </head>
    <?php
    require_once("sessionStart.php");
    ?>
    <body>
        <header>
            <h1>Tasks</h1>
            <form id = "adTaskForm" method="post">
                <input
                    type = "text"
                    placeholder = "What you wanna do?"
                    id = "newTaskInput"
                    name = "newTaskInput"
                    <?php
                    if($_SESSION['edit'] != "")
                    {
                       echo "value =  ".$_SESSION['edit'] ;
                       $_SESSION['edit'] = "";
                    }
                    ?>
                />
                <input
                    type = "submit"
                    id = "newTaskSubmit"
                    value = "Add Task"
                    name = "addTask"
                />
            </form>
        </header>
        <form method="post" id = "clearForm">
            <button
                type = "submit"
                id = "clear"
                name ="clear"
            >CLEAR LIST</button>
        </form>
        
        <main>
            <section class = "task-list">
                <h2>To Do List</h2>
                <form id = "taskList" method = "post" >

                    <?php
                    if(isset($_POST['addTask'])&&($_POST['newTaskInput']!=""))
                    {
                        $input = $_POST['newTaskInput'];
                        array_push($_SESSION['tasksList'], $input);
                    }

                    for($i = 0; $i < sizeof($_SESSION['tasksList']); $i++)
                    {
                        require("createTaskList.php");
                    }
                    ?>

                </form>
            </section>

            <section class="task-completed">
                <h2>Tasks Completed</h2>
                <form id = "taskCompleted" method = "post">

                    <?php

                    if(isset($_POST['clear']))
                    {
                        session_destroy();
                        header("location: index.php");
                    }
                    
                    for($i = 0; $i < sizeof($_SESSION['tasksListComp']); $i++)
                    {
                        require("createTaskListComp.php");
                    }

                    require("delete.php");
                    require("actions.php");

                    ?>
               
                </form>
            </section>
        </main>
    </body>
</html> 