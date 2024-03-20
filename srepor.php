<?php
require_once 'config.php'; // Include your database connection configuration

// Fetch data from MySQL using PDO
$stmt = $pdo->query("SELECT staff_number, registration_date, status, branch, title, creation_datetime FROM staff");
$staffMembers = [];

// Check if data is fetched successfully
if ($stmt) {
    // Fetch associative array
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $staffMembers[] = $row;
    }
} else {
    echo "No staff members found.";
}

// Generate report content
$report = "Staff Report\n\n";
$report .= "---------------------------------\n";
$report .= "Staff Number\tRegistration Date\tStatus\tBranch\tTitle\tCreation Datetime\n";
$report .= "---------------------------------\n";

foreach ($staffMembers as $staff) {
    $report .= "{$staff['staff_number']}\t{$staff['registration_date']}\t{$staff['status']}\t{$staff['branch']}\t{$staff['title']}\t{$staff['creation_datetime']}\n";
}

// Output the report
echo "<pre>$report</pre>";
?>
