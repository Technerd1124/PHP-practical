<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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
        input[type="text"], input[type="email"] {
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

    <h2>Registration Form</h2>
    
    <form action="" method="POST">
        <label>Name:</label><br>
        <input type="text" name="name" required><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br>

        <label>Gender:</label><br>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female" required> Female
        <input type="radio" name="gender" value="Other" required> Other
        <br><br>

        <label>Hobbies:</label><br>
        <input type="checkbox" name="hobbies[]" value="Reading"> Reading
        <input type="checkbox" name="hobbies[]" value="Traveling"> Traveling
        <input type="checkbox" name="hobbies[]" value="Gaming"> Gaming
        <br><br>

        <input type="submit" name="submit" value="Register" class="button">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : "None";

        echo "<h3>Registration Successful!</h3>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Hobbies:</strong> $hobbies</p>";
    }
    ?>

</body>
</html>
