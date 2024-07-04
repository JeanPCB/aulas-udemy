function main() {
    const taskInput = document.querySelector(".task-input");
    const addBtn = document.querySelector(".add-btn");
    const taskList = document.querySelector(".task-list");

    window.addEventListener("load", getSavedTaks);

    document.addEventListener("click", (e) => {
        const el = e.target;

        if(el.classList.contains("del-btn")) {
            el.parentElement.remove();
            saveTasks();
        }
    })

    taskInput.addEventListener("keypress", (e) => {
        if(e.keyCode === 13 && taskInput.value) {
            addTask(getInputText(taskInput));
        }
    })

    addBtn.addEventListener("click", () => {
        if(!taskInput.value) return;
        addTask(getInputText(taskInput));
    })

    function addTask(taskText) {
        const task = createEl("li");
        task.innerText = taskText;  
        addDelBtn(task);
        taskList.appendChild(task);
        clearInput(taskInput);
        saveTasks();
    }

    function addDelBtn(task) {
        const delTaskBtn = createEl("button");
        delTaskBtn.innerText = "delete";
        delTaskBtn.classList.add("del-btn");
        task.appendChild(delTaskBtn);
    }

    function saveTasks() {
        const taskItems = taskList.querySelectorAll("li");
        const tasks = [];

        taskItems.forEach(item => {
            let taskText = item.innerText;
            taskText = taskText.replace("delete", "");
            tasks.push(taskText);
        });

        const tasksJSON = JSON.stringify(tasks);
        localStorage.setItem("tasks", tasksJSON);
    }

    function getSavedTaks() {
        const tasks = localStorage.getItem("tasks");
        const taskList = JSON.parse(tasks);

        if(taskList) {
            taskList.forEach(item => addTask(item));
        }
    }

    function createEl(el) {
        const newEl = document.createElement(el);
        return newEl;
    }

    function getInputText(input) {
        const inputText = input.value;
        return inputText;
    }

    
    function clearInput(input) {
        input.value = "";
        input.focus();
    }
} 

main();