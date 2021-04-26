// ES6

// console.log(document.head);

// DOM Selectors using different html DOM attributes

// Select element by Id
// var toDo = document.getElementById("todo");
// // console.log(toDo);
// toDo.innerText = "To Do Task";
// toDo.textContent = "To do Tasks";

// // Select by classname
// var button = document.getElementsByClassName("edit");
// console.log(button);
// console.log(button[0]);
// button[0].innerText = "Remove";

// for (var i = 0; i < button.length; i++) {
//   button[i].innerText = "Remove";
// }

// for (var i = 0; i < button.length; i++) {
//   button[i].style.color = "green";
// }

// for (var i = 0; i < button.length; i++) {
//   button[i].style.color = "red";
// }

// Select by TagName
button = document.getElementsByTagName("button");
button[0].innerText = "Push";
// console.log(button[0]);
