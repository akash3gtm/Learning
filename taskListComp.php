<div class="tasks">
    <div class="content">
        <input
            type = "text"
            class = "text"
            value = " <?php  echo $row['task']; ?> "
            readonly
        />

    </div>

    <div class="actions">
        <button
            type = "submit"
            class = "delete"
            name = "delete<?php  echo $id; ?>"
        >DELETE</button>
    </div> 

</div>