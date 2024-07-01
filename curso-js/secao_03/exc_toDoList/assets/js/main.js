function main() {
    const taskInput = document.querySelector(".task-input");
    const addBtn = document.querySelector(".add-btn");
    const taskList = document.querySelector(".task-list");

    document.addEventListener("click", (e) => {
        const el = e.target;

        if(el.classList.contains("del-btn")) {
            el.parentElement.remove();
        }
    })

    taskInput.addEventListener("keypress", (e) => {
        if(e.keyCode === 13 && taskInput.value) {
            addTask();
        }
    })

    addBtn.addEventListener("click", () => {
        if(!taskInput.value) return;
        addTask();
    })

    function addTask() {
        const task = createEl("li");
        task.innerText = getInputText(taskInput);  
        addDelBtn(task);
        taskList.appendChild(task);
        clearInput(taskInput);
    }

    function addDelBtn(task) {
        const delTaskBtn = createEl("button");
        delTaskBtn.innerText = "delete";
        delTaskBtn.classList.add("del-btn");
        task.appendChild(delTaskBtn);
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