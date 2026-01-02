document.getElementById("loginForm").addEventListener("submit", function (e) {
  e.preventDefault();

  let username = document.getElementById("username").value;
  let password = document.getElementById("loginPassword").value;

  let storedUser = localStorage.getItem(username);

  if (!storedUser) {
    alert("User not found!");
    return;
  }

  let userData = JSON.parse(storedUser);

  if (userData.password === password) {
    alert("Login successful!");
  } else {
    alert("Incorrect password!");
  }