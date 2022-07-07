window.addEventListener('load', () => {
    const form = document.querySelector("#new-task-form");
    const input = document.querySelector("#new-task-input");
    const list_el = document.querySelector("#task");
    const list_cl = document.querySelector("#tasks");

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const tasks = input.value;
        if(!tasks){
            alert("Please type a task!");
            return;
        }
        const tasks_el = createDiv("tasks");

        const tasks_list_el = createDiv("content");

        tasks_el.appendChild(tasks_list_el);

        const tasks_input_el = create(tasks);

        tasks_list_el.appendChild(tasks_input_el);

        const tasks_actions_el = createDiv("actions");

        const tasks_edit_el = createButton("edit");

        const tasks_completed_el = createButton("completed");

        tasks_actions_el.appendChild(tasks_edit_el);
        tasks_actions_el.appendChild(tasks_completed_el);

        tasks_el.appendChild(tasks_actions_el);

        input.value = "";

        list_el.appendChild(tasks_el);

        tasks_edit_el.addEventListener('click', () => {
            editTask(tasks_input_el,tasks_edit_el);
        })

        tasks_completed_el.addEventListener('click', () => {
            if(confirm("Task Completed?")){
                list_cl.appendChild(transfer(list_cl,tasks));
                list_el.removeChild(tasks_el);
            }
        })

    })
})

function create(tasks){
        temp = document.createElement("input");
        temp.classList.add("text");
        temp.type = "text";
        temp.value = tasks;
        temp.setAttribute("readonly", "readonly");
        return temp;
}

function editTask(inputElement,taskElement){
    if(taskElement.innerText == "EDIT"){
        inputElement.removeAttribute("readonly");
        inputElement.focus();
        taskElement.innerText = "SAVE";
    }else{
        inputElement.setAttribute("readonly", "readonly");
        taskElement.innerText = "EDIT";
    }
}

function createDiv(inputName){
    const temp = document.createElement("div");
    temp.classList.add(inputName);
    return temp;
}

function createButton(inputName){
    const temp = document.createElement("button");
    temp.classList.add(inputName);
    temp.innerHTML = inputName.toUpperCase();
    return temp;
}

function transfer(list,temp){
    
    const tasks_el = createDiv("tasks");

    const tasks_list_el = createDiv("content");

    tasks_el.appendChild(tasks_list_el);

    const tasks_input_el = create(temp);

    tasks_list_el.appendChild(tasks_input_el);

    const tasks_actions_el = createDiv("actions");

    const tasks_delete_el = createButton("delete");

    tasks_actions_el.appendChild(tasks_delete_el);

    tasks_el.appendChild(tasks_actions_el);

    tasks_delete_el.addEventListener('click', () => {
        if(confirm("Task Completed?")){
            list.removeChild(tasks_el);
        }
    })

    return tasks_el;
}