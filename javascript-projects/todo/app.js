var taskInput = document.getElementById("new-task"); // Selecting the input tag
var addButton = document.getElementsByTagName("button")[0]; // Selecting only first button
// var deleteButton = document.getElementsByClassName("delete");
// var editButton = document.getElementsByClassName("edit");

// console.log(deleteButton);
// Selecting the Incomplete Task List
var incompleteTasksHolder = document.getElementById("incomplete-tasks");
// Selecting complete tasks list
var completedTasksHolder = document.getElementById("completed-tasks");

// Creating a news list item in incomplete task list
var createNewTaskElement = function (taskString) {
  console.log("creating task list");
  var listItem = document.createElement("li");
  // creating a checkbox
  var checkBox = document.createElement("input");
  //creating a label
  var label = document.createElement("label");
  // creating a text input
  var editInput = document.createElement("input");
  // creating a edit button
  var editButton = document.createElement("button"); // <button></button>
  // creating a delete button
  var deleteButton = document.createElement("button");

  // Modifying the elements
  checkBox.type = "checkbox";
  editInput.type = "text";

  editButton.innerText = "Edit";
  editButton.className = "edit";
  deleteButton.innerText = "Delete";
  deleteButton.className = "delete";

  label.innerText = taskString;

  // Appending child elements
  listItem.appendChild(checkBox);
  listItem.appendChild(label);
  listItem.appendChild(editInput);
  listItem.appendChild(editButton);
  listItem.appendChild(deleteButton);

  return listItem;
};

var addTask = function () {
  if (taskInput.value == "") {
    console.log("Input value is empty");
    return;
  }
  console.log("Appending to Incompleted Task list");
  var listItem = createNewTaskElement(taskInput.value);
  // Append to incompleted task holder
  incompleteTasksHolder.appendChild(listItem);
  taskInput.value = "";
  bindTaskEvents(listItem);
  // console.log(deleteButton);
};

addButton.addEventListener("click", addTask);

taskInput.addEventListener("keyup", function (e) {
  // Closour Function
  if (e.which == 13) {
    // if (condition) {
    //   // logic for checking if the task is already added
    //   // alert("The tasks has already been added to the list");
    // } else {
    addTask();
    // }
  }
});

var deleteTask = function () {
  console.log("Deleting Task.....");
  var deleteItem = this.parentNode;

  var taskHolder = deleteItem.parentNode;
  taskHolder.removeChild(deleteItem);
};

var editTask = function () {
  console.log("Editing the selected task...");
  var listItem = this.parentNode;

  // Hide Label Tag, Show hidden input tag, put value to label to input
  var editInput = listItem.querySelector("input[type=text]");
  var label = listItem.querySelector("label");

  var containsClass = listItem.classList.contains("editMode");

  if (containsClass) {
    //Switch from .editMode
    label.innerText = editInput.value;
  } else {
    //Switch to .editMode
    editInput.value = label.innerText;
  }

  listItem.classList.toggle("editMode");
};

var taskCompleted = function () {
  console.log("Tasks Completed....");
  // Apppend the task list to the completed task
  var listItem = this.parentNode;
  completedTasksHolder.appendChild(listItem);
  bindTaskEvents(listItem, taskIncomplete);
};

var bindTaskEvents = function (taskListener, checkBoxEventHandler) {
  console.log("Binding event to listner");
  // Query Selection for child elements
  var checkbox = taskListener.querySelector("input[type=checkbox]");
  var editButton = taskListener.querySelector("button.edit");
  var deleteButton = taskListener.querySelector("button.delete");

  // bind deletebutton to deleteTask
  deleteButton.onclick = deleteTask;

  editButton.onclick = editTask;

  // Bind checkboxEventHandler to the checkbox
  checkbox.onchange = checkBoxEventHandler;
};

// Incompeted list of tasks binding
for (var i = 0; i < incompleteTasksHolder.children.length; i++) {
  bindTaskEvents(incompleteTasksHolder.children[i]);
}

// Completed LIst of tasks bindng
for (var i = 0; i < completedTasksHolder.children.length; i++) {
  bindTaskEvents(completedTasksHolder.children[i]);
}
