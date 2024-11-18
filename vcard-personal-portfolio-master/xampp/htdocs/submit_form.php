<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // For now, just echo the data (you can later send it via email or save it)
    echo "<h1>Form Submission Successful!</h1>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Message: $message</p>";
} else {
    echo "<h1>Error: Form not submitted.</h1>";
}
?>
