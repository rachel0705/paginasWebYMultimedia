function addTask() {
    const taskInput = document.getElementById('new-task');
    const taskText = taskInput.value.trim();

    if (taskText === '') {
        alert('Por favor, ingresa una tarea.');
        return;
    }

    const taskList = document.getElementById('task-list');
    const listItem = document.createElement('li');
    const taskContent = document.createElement('span');
    taskContent.textContent = taskText;

    const buttonsContainer = document.createElement('div');
    buttonsContainer.classList.add('task-buttons');

    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Quitar';
    deleteButton.onclick = function () {
        listItem.classList.add('remove-animation');
        setTimeout(() => taskList.removeChild(listItem), 300);
    };

    const editButton = document.createElement('button');
    editButton.textContent = 'Editar';
    editButton.classList.add('edit');
    editButton.onclick = function () {
        const newText = prompt('Editar tarea:', taskContent.textContent);
        if (newText !== null && newText.trim() !== '') {
            taskContent.textContent = newText.trim();
        }
    };

    buttonsContainer.appendChild(editButton);
    buttonsContainer.appendChild(deleteButton);

    listItem.appendChild(taskContent);
    listItem.appendChild(buttonsContainer);

    taskList.appendChild(listItem);
    taskInput.value = '';
}
