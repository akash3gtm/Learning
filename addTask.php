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
            class = "edit"
            name = "edit<?php  echo $id; ?>"
        >EDIT</button>
        
        <button
            type = "submit"
            class = "completed"
            name = "completed<?php  echo $id; ?>"
        >COMPLETED</button>
    
    </div> 

</div>