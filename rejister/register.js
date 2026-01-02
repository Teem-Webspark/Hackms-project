document.getElementById("registerForm").addEventListener("submit", function (e) {
  e.preventDefault();

  // Get input values
  const username = document.getElementById("username").value.trim();
  const email = document.getElementById("email").value.trim();
  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("confirm").value;
  const address = document.getElementById("address").value.trim();

  const message = document.getElementById("message");

  // Clear old message
  message.textContent = "";
  message.style.color = "red";

  // Password match check
  if (password !== confirmPassword) {
    message.textContent = "Passwords do not match!";
    return;
  }

  
  if (localStorage.getItem(username)) {
    message.textContent = "Username already exists!";
    return;
  }

  
  const userData = {
    email: email,
    password: password,
    address: address
  };

  
  localStorage.setItem(username, JSON.stringify(userData));

  message.style.color = "green";
  message.textContent = "Registration successful! Redirecting to login...";