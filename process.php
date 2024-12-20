<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $address = nl2br(htmlspecialchars($_POST['address']));
    
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Registration Success</title>
        <link rel='stylesheet' href='styles.css'>
    </head>
    <body>
        <div class='container'>
            <h2>Registration Successful</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Gender:</strong> $gender</p>
            <p><strong>Address:</strong><br> $address</p>
        </div>
    </body>
    </html>";
} else {
    echo "Invalid Request!";
}
?>
