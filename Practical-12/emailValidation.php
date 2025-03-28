<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }
        form {
            background: white;
            padding: 20px;
            max-width: 400px;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0px 0px 10px gray;
        }
        label {
            font-weight: bold;
        }
        input[type="email"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .button {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <h2>Email Validation Form</h2>
    
    <form action="" method="POST">
        <label>Enter Email:</label><br>
        <input type="email" name="email" required><br><br>
        <input type="submit" name="submit" value="Validate Email" class="button">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];

        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<h3 style='color:green;'>Valid Email: $email</h3>";
        } else {
            echo "<h3 style='color:red;'>Invalid Email Format!</h3>";
        }
    }
    ?>

</body>
</html>
