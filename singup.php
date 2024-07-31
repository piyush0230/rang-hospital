<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Save the user data to a file
    $file = fopen('users.txt', 'a');
    fwrite($file, "$username,$password\n");
    fclose($file);

    echo "logim successful! You can now <a href='register.html'>register</a>.";
} else {
    echo "Invalid request method.";
}
?>
