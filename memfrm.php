<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="file"],
        input[type="datetime-local"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;`
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<form method="post" action="members.php">
    <label for="registration_number">Registration Number:</label>
    <input type="text" name="registration_number" id="registration_number" required><br>

    <label for="id_number">ID Number:</label>
    <input type="text" name="id_number" id="id_number" required><br>

    <label for="membership_number">Membership Number:</label>
    <input type="text" name="membership_number" id="membership_number" required><br>

    <label for="photo_member">Photo Member:</label>
    <input type="file" name="photo_member" id="photo_member" accept="image/*" required><br>

    <label for="photo_id_front">Photo ID Front:</label>
    <input type="file" name="photo_id_front" id="photo_id_front" accept="image/*" required><br>

    <label for="photo_id_back">Photo ID Back:</label>
    <input type="file" name="photo_id_back" id="photo_id_back" accept="image/*" required><br>

    <label for="domicile_branch">Domicile Branch:</label>
    <input type="text" name="domicile_branch" id="domicile_branch" required><br>

    <label for="registration_staff_number">Registration Staff Number:</label>
    <input type="text" name="registration_staff_number" id="registration_staff_number" required><br>

    <label for="registration_datetime">Registration Datetime:</label>
    <input type="datetime-local" name="registration_datetime" id="registration_datetime" required><br>

    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
