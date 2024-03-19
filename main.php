<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member and Staff Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            margin: 10px;
        }
        button:hover {
            background-color: #45a049;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            width: 300px;
            margin: 20px auto;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"],
        input[type="file"],
        input[type="datetime-local"],
        select {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"],
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
        input[type="submit"]:hover,
        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<button onclick="showMembersForm()">Members</button>
<button onclick="showStaffForm()">Staff</button>

<div id="membersForm" style="display: none;">
    <form method="post" action="memfrm.php">
        <!-- Members form fields -->
        <label for="registration_number">Registration Number:</label>
        <input type="text" name="registration_number" id="registration_number" required><br>

        <!-- Other members form fields -->

        <input type="submit" name="submit" value="Submit">
    </form>
</div>

<div id="staffForm" style="display: none;">
    <form method="post" action="stafrm.php">
        <!-- Staff form fields -->
        <label for="staff_number">Staff Number:</label>
        <input type="text" name="staff_number" id="staff_number" required><br>

        <!-- Other staff form fields -->

        <button type="submit" name="submit">Submit</button>
    </form>
</div>

<script>
    function showMembersForm() {
        document.getElementById("mem").style.display = "block";
        document.getElementById("staffForm").style.display = "none";
    }

    function showStaffForm() {
        document.getElementById("membersForm").style.display = "none";
        document.getElementById("staffForm").style.display = "block";
    }
</script>

</body>
</html>
