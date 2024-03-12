<?php
require_once 'config.php';
// Set the content type to JSON
header('Content-Type: application/json');

// Simulated authentication credentials (replace with actual authentication logic)
$valid_username = 'admin';
$valid_password = 'password123';

// Check if the request contains authentication credentials
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
    $_SERVER['PHP_AUTH_USER'] !== $valid_username || $_SERVER['PHP_AUTH_PW'] !== $valid_password) {
    header('HTTP/1.1 401 Unauthorized');
    echo json_encode(['error' => 'Unauthorized access']);
    exit;
}

// Handle HTTP methods
$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'GET':
        // Read operation (fetch staff members)
        $stmt = $pdo->query("SELECT * FROM staff");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
        break;
    case 'POST':
        // Create operation (add a new member)
        $data = json_decode(file_get_contents("php://input"), true);

        if ($data) {
            $staff_number = $data['staff_number'];
            $username = $data['username'];
            $password = $data['password'];
            $registration_datetime = $data['registration_datetime'];
            $status = $data['status'];
            $branch = $data['branch'];
            $title = $data['title'];

            // Check if staff number is provided
            if ($staff_number) {
                // Insert data into the staff table
                $stmt = $pdo->prepare("INSERT INTO staff(staff_number, username, password, registration_datetime, status, branch, title) VALUES (?,?,?,?,?,?,?)");
                $stmt->execute([$staff_number, $username, $password, $registration_datetime, $status, $branch, $title]);
                echo json_encode(['message' => 'Member added successfully']);
            } else {
                echo json_encode(['error' => 'Staff number cannot be null']);
            }
        } else {
            echo json_encode(['error' => 'No data provided']);
        }
        break;
}
?>
