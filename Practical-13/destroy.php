<?php
session_start(); // Start the session

// Start a session and store a value
if(isset($_POST['start'])) {
    $_SESSION["username"] = "JohnDoe"; // Store session data
    echo "<p>Session Started! Username set to JohnDoe.</p>";
}

// Destroy the session
if(isset($_POST['destroy'])) {
    session_unset();  // Unset all session variables
    session_destroy(); // Destroy the session
    echo "<p>Session Destroyed!</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Session Example</title>
</head>
<body>

    <h2>PHP Session Example</h2>

    <form method="post">
        <input type="submit" name="start" value="Start Session">
        <input type="submit" name="destroy" value="Destroy Session">
    </form>

    <h3>Current Session Data:</h3>
    <p>
        <?php
        if(isset($_SESSION["username"])) {
            echo "Username: " . $_SESSION["username"];
        } else {
            echo "No active session!";
        }
        ?>
    </p>

</body>
</html>
