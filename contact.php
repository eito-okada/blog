<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$email = $_POST['email'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];
echo "<p>Your email: $email</p>";
echo "<br>";
echo "<p>Your name: $name</p>";
echo "<br>";
echo "<p>Subject: $subject</p>";
echo "<br>";
echo "<p>Message: $message</p>";
$message .=" ".$email;
$mailSuccess = mail( "eito8.8okada@gmail.com", $subject, $message);
if ($mailSuccess === true) {
    echo "<p>Sending success!</p><br><p>Please wait for a reply from me!</p>";
} else {
    echo "<p>Sending failed. Try again...</p>";
}
?>
</body>
</html>