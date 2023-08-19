const loginForm = document.getElementById('login-form');

loginForm.addEventListener('submit', function(event) {
  event.preventDefault();

  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

  if (username === 'yourusername' && password === 'yourpassword') {
    alert('Login successful!');
    // You can add code here to redirect to another page after successful login
  } else {
    alert('Invalid username or password. Please try again.');
  }
});
