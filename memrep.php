<?php
require_once 'config.php'; // Include your database connection configuration

// Fetch data from MySQL using PDO
$stmt = $pdo->query("SELECT * FROM members");
$members = [];

// Check if data is fetched successfully
if ($stmt) {
    // Fetch associative array
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $members[] = $row;
    }
} else {
    echo "No members found.";
}

// Generate report content
$report = "Member Report\n\n";
$report .= "---------------------------------\n";
$report .= "Registration Number\tID Number\tMembership Number\n"; // Removed ID from the header
$report .= "---------------------------------\n";

foreach ($members as $member) {
    // Removed the ID from the report
    $report .= "{$member['registration_number']}\t{$member['id_number']}\t{$member['membership_number']}\n";
}

// Output the report
echo "<pre>$report</pre>";
?>
