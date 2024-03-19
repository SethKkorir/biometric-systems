<?php
require_once 'config.php'; 

// Insert Data
if(isset($_POST['submit'])) {
    // Retrieve form data
    $staff_number = $_POST['staff_number'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $registration_date = $_POST['registration_date']; // Changed to match the provided variable name
    $status = $_POST['status'];
    $branch = $_POST['branch'];
    $title = $_POST['title'];
    $creation_datetime = $_POST['creation_datetime']; // Assuming this value is provided in the form

    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO staff(staff_number, username, password, registration_date, status, branch, title, creation_datetime) 
            VALUES (:staff_number, :username, :password, :registration_date, :status, :branch, :title, :creation_datetime)";

    // Prepare the PDO statement
    $stmt = $pdo->prepare($sql);

    // Bind parameters with values
    $stmt->bindParam(':staff_number', $staff_number);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':registration_date', $registration_date);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':branch', $branch);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':creation_datetime', $creation_datetime);

    // Execute the prepared statement
    try {
        $stmt->execute();
        echo "Data inserted successfully.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Update Data
if(isset($_POST['update'])) {
    $id_to_update = $_POST['id_to_update']; // Assuming this value is submitted via POST
    $new_staff_number = $_POST['new_staff_number']; // Assuming this value is submitted via POST

    $sql = "UPDATE members SET staff_number = :new_staff_number WHERE id = :id_to_update";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':new_staff_number', $new_staff_number);
    $stmt->bindParam(':id_to_update', $id_to_update);

    try {
        $stmt->execute();
        echo "Data updated successfully.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Delete Data
if(isset($_POST['delete'])) {
    $id_to_delete = $_POST['id_to_delete']; // Assuming this value is submitted via POST

    $sql = "DELETE FROM members WHERE id = :id_to_delete";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id_to_delete', $id_to_delete);

    try {
        $stmt->execute();
        echo "Data deleted successfully.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Get Data
$sql = "SELECT * FROM members";
$stmt = $pdo->query($sql);

if ($stmt) {
    // Fetch all rows as associative array
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Process the fetched data
    foreach ($rows as $row) {
        // Example: echo $row['registration_number'];
    }
} else {
    // Handle query error
    echo "Error: " . $pdo->errorInfo()[2];
}
?>
