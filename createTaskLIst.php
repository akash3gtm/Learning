<div class="tasks">
    <div class="content">
        <input
            type = "text"
            class = "text"
            value = " <?php  echo $_SESSION['tasksList'][$i]; ?> "
            readonly
        />

    </div>

    <div class="actions">
        <button
            type = "submit"
            class = "edit"
            name = "edit<?php  echo $i; ?>"
        >EDIT</button>
        
        <button
            type = "submit"
            class = "completed"
            name = "completed<?php  echo $i; ?>"
        >COMPLETED</button>
    
    </div> 

</div>