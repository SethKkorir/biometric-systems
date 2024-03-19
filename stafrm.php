<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: skyblue;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: red; /* Red color for labels */
        }

        input[type="text"],
        input[type="password"],
        input[type="file"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: yellow; /* Green */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<form method="post" action="staff.php">
    <!-- Your existing form fields -->
    <label for="staff_number">Staff Number:</label>
    <input type="text" name="staff_number" id="registration_staff_number"><br>
    
    <label for="username">Username:</label>
    <input type="text" name="username" id="username"><br>
    
    <label for="password">Password:</label>
    <input type="password" name="password" id="password"><br>
    
    <label for="registration_date">Registration Date:</label>
    <input type="date" name="registration_date" id="registration_date"><br>
    
    <label for="status">Status:</label>
    <select name="status" id="status"> Choose
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
    </select><br>
    
    <label for="branch">Branch:</label>
    <input type="text" name="branch" id="branch"><br>
    
    <label for="title">Title:</label>
    <input type="text" name="title" id="title"><br>

    <label for="creation_datetime">Creation Datetime:</label>
    <input type="time" name="creation_datetime" id="creation_datetime"><br>
    
    <button type="submit" name="submit">Submit</button>
</form>

</body>
</html>
