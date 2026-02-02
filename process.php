<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = array();
    
    // Check if fields are empty
    if (empty($_POST["name"])) {
        $errors[] = "Name is required";
    }
    
    if (empty($_POST["email"])) {
        $errors[] = "Email is required";
    }
    
    if (empty($_POST["event"])) {
        $errors[] = "Please select an event";
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        // Process form data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $event = $_POST["event"];
        $year = $_POST["year"];
        $message = $_POST["message"];
        
        echo "Fox day awaits! We can't wait to see you there 🦊<br>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Event: " . $event . "<br>";
        echo "Year: " . $year . "<br>";
        echo "Message: " . $message . "<br>";
        echo '<br><a href="index.html">Go back to the Home page.</a>';

    } else {
    // Display errors
    echo "<h2>Error encountered!</h2>";
    echo "<p>Please fix the following issues:</p>";
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>" . $error . "</li>";
    }
    echo "</ul>";
    echo '<p><a href="register.html">Click here to go back to the Register page and try again.</a></p>';
}
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
</body>
</html>