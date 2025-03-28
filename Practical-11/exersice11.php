<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with List Box and Combo Box</title>
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
        select, input[type="text"] {
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

    <h2>Form with List Box and Combo Box</h2>
    
    <form action="" method="POST">
        <label>Name:</label><br>
        <input type="text" name="name" required><br>

        <label>Country (Combo Box):</label><br>
        <select name="country" required>
            <option value="USA">USA</option>
            <option value="UK">UK</option>
            <option value="Canada">Canada</option>
            <option value="India">India</option>
            <option value="Australia">Australia</option>
        </select><br>

        <label>Skills (List Box - Multi-Select):</label><br>
        <select name="skills[]" multiple size="4">
            <option value="PHP">PHP</option>
            <option value="JavaScript">JavaScript</option>
            <option value="Python">Python</option>
            <option value="Java">Java</option>
            <option value="C++">C++</option>
        </select><br><br>

        <input type="submit" name="submit" value="Submit" class="button">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $country = $_POST['country'];
        $skills = isset($_POST['skills']) ? implode(", ", $_POST['skills']) : "None";

        echo "<h3>Form Submitted Successfully!</h3>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Country:</strong> $country</p>";
        echo "<p><strong>Skills:</strong> $skills</p>";
    }
    ?>

</body>
</html>
