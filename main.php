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
            background-color: yellowgreen;
            padding: 20px;
        }
        .members,
        .staff,
        .report {
            text-align: center;
            margin-bottom: 20px;
           
        }
        .members button,
        .staff button,
        .report button {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 50px;
            transition: background-color 0.3s;
            width: 40%;
            margin-right: 10px;
        }
        .members button:hover,
        .staff button:hover,
        .report button:hover {
            background-color: #45a049;
        }
        .report-dropdown {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .report-dropdown button {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="members">
        <a href="memfrm.php"><button>MEMBERS</button></a>
    </div>
    
    <div class="staff">
        <a href="stafrm.php"><button>STAFF</button></a>
    </div>

    <div class="report">
        <button onclick="toggleDropdown()">REPORT</button>
        <div id="reportDropdown" class="report-dropdown">
            <a href="srepor.php"><button>Staff Report</button></a>
            <a href="memrep.php"><button>Members Report</button></a>
        </div>
    </div>

    <script>
        function toggleDropdown() {
            var dropdown = document.getElementById("reportDropdown");
            if (dropdown.style.display === "block") {
                dropdown.style.display = "none";
            } else {
                dropdown.style.display = "block";
            }
        }
    </script>
</body>
</html>
