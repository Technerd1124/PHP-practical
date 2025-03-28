<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie Example</title>
</head>
<body>

    <h2>PHP Cookie Example</h2>

    <?php
    // Creating a cookie
    if(isset($_POST['create'])) {
        setcookie("user", "John Doe", time() + (86400 * 7), "/"); // Cookie valid for 7 days
        echo "<p>Cookie 'user' Created!</p>";
    }

    // Modifying a cookie
    if(isset($_POST['modify'])) {
        if(isset($_COOKIE['user'])) {
            setcookie("user", "Jane Smith", time() + (86400 * 7), "/");
            echo "<p>Cookie 'user' Modified to 'Jane Smith'!</p>";
        } else {
            echo "<p>Cookie 'user' not found! Create it first.</p>";
        }
    }

    // Deleting a cookie
    if(isset($_POST['delete'])) {
        setcookie("user", "", time() - 3600, "/"); // Expire the cookie
        echo "<p>Cookie 'user' Deleted!</p>";
    }
    ?>

    <form method="post">
        <input type="submit" name="create" value="Create Cookie">
        <input type="submit" name="modify" value="Modify Cookie">
        <input type="submit" name="delete" value="Delete Cookie">
    </form>

    <h3>Current Cookie Value:</h3>
    <p>
        <?php
        if(isset($_COOKIE['user'])) {
            echo "User: " . $_COOKIE['user'];
        }
