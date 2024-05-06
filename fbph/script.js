document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    // Send username and password to your server
    // You can also display an error message to simulate a failed login attempt
});
