<?php
// Dummy existing users
$existingUsers = ["admin", "test", "student"];
$existingEmails = ["admin@gmail.com", "test@gmail.com"];

if (isset($_GET['username'])) {
    $username = $_GET['username'];
    if (in_array($username, $existingUsers)) {
        echo "❌ Username already exists";
    } else {
        echo "✅ Username available";
    }
}

if (isset($_GET['email'])) {
    $email = $_GET['email'];
    if (in_array($email, $existingEmails)) {
        echo "❌ Email already exists";
    } else {
        echo "✅ Email available";
    }
}
?>
