<div class="tasks">
    <div class="content">
        <input
            type = "text"
            class = "text"
            value = " <?php  echo $_SESSION['tasksListComp'][$i]; ?> "
            readonly
        />

    </div>

    <div class="actions">
        <button
            type = "submit"
            class = "delete"
            name = "delete<?php  echo $i; ?>"
        >DELETE</button>
    </div> 

</div>