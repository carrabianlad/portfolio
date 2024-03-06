<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email from the form
    $email = $_POST['email'];

    // Set up the email parameters
    $to = "stellarstarkonyt@gmail.com";
    $subject = "New Email Submission";
    $message = "Email: " . $email;
    $headers = "From: " . $email;

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Error: Unable to send email.";
    }
}
?>
