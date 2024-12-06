<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Start session and redirect
        session_start();
        $_SESSION['user'] = $email;
        header("Location: account.php");
    } else {
        echo "<script>alert('Invalid email or password');</script>";
    }
}
?>