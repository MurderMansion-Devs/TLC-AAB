<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);

    if ($name && $email) {
        // Example: Save to a database or send an email
        echo "Thank you, $name! Your email ($email) has been received.";
    } else {
        echo "Invalid input. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>