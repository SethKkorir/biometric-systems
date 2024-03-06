<?php
 require_once 'config.php';
 // seth the content type to JSON
 header('Content-Type: application/json');
 //handle HTTP methods
 $method = $_SERVER['REQUEST_METHOD'];
 switch($method){
    case  'GET':
                 //Read operation (fetch book)
                $stmt = $pdo->query( "SELECT * FROM members" );
                  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                echo json_encode($result);
     break;
     case 'POST':
        // Create operation (add a new member)
        $data = json_decode(file_get_contents("php://input"), true);

        if ($data) {
            $registration_number = $data['registration_number'];
            $id_number = $data['id_number'];
            $membership_number = $data['membership_number'];
            $photo_member = $data['photo_member'];
            $photo_id_front = $data['photo_id_front'];
            $photo_id_back = $data['photo_id_back'];
            $domicile_branch = $data['domicile_branch'];
            $registration_staff_number = $data['registration_staff_number'];
            $registration_datetime = $data['registration_datetime'];

            // Check if registration number is provided
            if ($registration_number) {
                // Insert data into the members table
                $stmt = $pdo->prepare("INSERT INTO members(registration_number, id_number, membership_number, photo_member, photo_id_front, photo_id_back, domicile_branch, registration_staff_number, registration_datetime) VALUES (?,?,?,?,?,?,?,?,?)");
                $stmt->execute([$registration_number, $id_number, $membership_number, $photo_member, $photo_id_front, $photo_id_back, $domicile_branch, $registration_staff_number, $registration_datetime]);

                echo json_encode(['message' => 'Member added successfully']);
            } else {
                echo json_encode(['message' => 'Registration number cannot be null']);
            }
        } else {
            echo json_encode(['message' => 'No data provided']);
        }
        break;
 }


?>