<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = "bradleyschmidt04@gmail.com"; // Change this to your email address
    $subject = "New Form Submission";
    $name = $_POST["name"];
    $email = $_POST["email"];
    // Retrieve other form fields here

    $mailContent = "Name: $name\n";
    $mailContent .= "Email: $email\n";
    // Add other form field data to the content

    mail($recipient, $subject, $mailContent);

    // Redirect to a thank-you page
    //header("Location: index.html");
}
?>
