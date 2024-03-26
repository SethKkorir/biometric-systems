<?php
require_once 'config.php'; 


// Insert Data
if(isset($_POST['submit'])) {
    // Retrieve form data
    $registration_number = $_POST['registration_number'];
    $id_number = $_POST['id_number'];
    $membership_number = $_POST['membership_number'];
    $photo_member = $_POST['photo_member'];
    $photo_id_front = $_POST['photo_id_front'];
    $photo_id_back = $_POST['photo_id_back'];
    $domicile_branch = $_POST['domicile_branch'];
    $registration_staff_number = $_POST['registration_staff_number'];
    $registration_datetime = $_POST['registration_datetime'];

    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO members(registration_number, id_number, membership_number, photo_member, photo_id_front, photo_id_back, domicile_branch, registration_staff_number, registration_datetime) 
            VALUES (:registration_number, :id_number, :membership_number, :photo_member, :photo_id_front, :photo_id_back, :domicile_branch, :registration_staff_number, :registration_datetime)";

    // Prepare the PDO statement
    $stmt = $pdo->prepare($sql);

    // Bind parameters with values
    $stmt->bindParam(':registration_number', $registration_number);
    $stmt->bindParam(':id_number', $id_number);
    $stmt->bindParam(':membership_number', $membership_number);
    $stmt->bindParam(':photo_member', $photo_member);
    $stmt->bindParam(':photo_id_front', $photo_id_front);
    $stmt->bindParam(':photo_id_back', $photo_id_back);
    $stmt->bindParam(':domicile_branch', $domicile_branch);
    $stmt->bindParam(':registration_staff_number', $registration_staff_number);
    $stmt->bindParam(':registration_datetime', $registration_datetime);

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
    $new_registration_number = $_POST['new_registration_number']; // Assuming this value is submitted via POST

    $sql = "UPDATE members SET registration_number = :new_registration_number WHERE id = :id_to_update";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':new_registration_number', $new_registration_number);
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
