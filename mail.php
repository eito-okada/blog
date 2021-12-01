<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./public/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./public/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./public/favicon/favicon-16x16.png">
    <link rel="manifest" href="./public/favicon/site.webmanifest">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/contact.css">
</head>
<body>
<div class="header">
        <div class="logo">
            <a href="./home.html">Eito's Blog</a>
        </div>
        <div class="navbar">
            <div class="navbartab"><a href="./home">Home</a></div>
            <div class="navbartab"><a href="./blog">My Blog</a></div>
            <div class="navbartab"><a href="./about">About</a></div>
            <div class="navbartab"><a href="./contact">Contact Me</a></div>
        </div>
    </div>
    <?php
    $email = htmlspecialchars($_POST['email']);
    $name = htmlspecialchars($_POST['name']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    $mailmessage = htmlspecialchars($message." ".$email);
    $mailSuccess = mail( "eito8.8okada@gmail.com", $subject, $mailmessage);
    ?>
    <div class="main">
        <div class="title">
            <?php
            if ($mailSuccess === true) {
                echo "<h2>Sending success!</h2><p>Please wait for a reply from me!</p>";
            } else {
                echo "<p>Sending failed. Try again...</p>";
            }
            ?>
        </div>
        <div class="results">
<?php
echo "<p>Your email:<br>$email</p>";
echo "<br>";
echo "<p>Your name:<br>$name</p>";
echo "<br>";
echo "<p>Subject:<br>$subject</p>";
echo "<br>";
echo "<p>Message:<br>$message</p>";
?>
        </div>
        <div class="bloglink">
            <a href="./blog">Thank you! Have you read my blog yet?</a>
        </div>
    </div>
</body>
</html>