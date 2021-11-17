<!DOCTYPE html>

<?php

// define variables
$nameError = $emailError = $messageError = "";
$name = $email = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["name"])) {
        $nameError = "The name field is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if(empty($_POST["email"])) {
        $emailError = "The email field is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if(empty($_POST["message"])) {
        $messageError = "The message field is required";
    } else {
        $message = test_input($_POST["message"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<html>
    <meta charset="utf-8">
    <title>Forms action page</title>
    <link rel="stylesheet" href="default.css">

    <body>
        <h1>Submitted Form Data</h1>
        <h2>Your input was received as:</h2>
        <div style="word-wrap:break-word">$name $email</div>
    </body>
</html>
