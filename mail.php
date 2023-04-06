<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];

    // Compose the email message
    $to_email = 'recipient@example.com';
    $subject = 'New Order from ' . $name;
    $message = "Name: $name\nPhone: $phone\nCountry: $country";
    $headers = 'From: yourname@example.com' . "\r\n" .
        'Reply-To: yourname@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Send the email using the mail() function
    if (mail($to_email, $subject, $message, $headers)) {
        echo 'Thank you for your order! We will be in touch soon.';
    } else {
        echo 'Error sending email.';
    }
}
