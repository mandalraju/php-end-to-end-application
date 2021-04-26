const form = document.getElementById("form");
const username = document.getElementById("username");
const email = document.getElementById("email");
const password = document.getElementById("password");
const password2 = document.getElementById("password2");

form.addEventListener("submit", (e) => {
  // Closour Function
  e.preventDefault();

  validateInputs();
});

function validateInputs() {
  // trim to remove whitespaces
  const usernameValue = username.value.trim();
  const emailValue = email.value.trim();
  const passwordValue = password.value.trim();
  const password2Value = password2.value.trim();

  if (usernameValue == "") {
    setErrorFor(username, "Username field cannot be empty");
  } else if (usernameValue.length > 5) {
    setErrorFor(username, "Username cannot be greater than 5 characters");
  }

  if (emailValue == "") {
    setErrorFor(email, "Email field cannot be empty");
  } else if (!isEmail(emailValue)) {
    setErrorFor(email, "Please enter a valid email");
  }

  if (passwordValue == "") {
    setErrorFor(password, "Password Field cannot be empty");
  }

  if (password2Value == "") {
    setErrorFor(password2, "Confirm password field cannot be empty");
  } else if (passwordValue !== password2Value) {
    setErrorFor(password2, "Password doesn't match");
  } else {
  }
}

// = == === != !== !===

function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");
  formControl.className = "form-control error";

  small.innerText = message;
}
// something@something.something
function isEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  );
}
