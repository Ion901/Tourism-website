<?php
require_once "connection.php";
// Get the raw POST data from the request body
$data = json_decode(file_get_contents('php://input'), true);

// Check if the data is valid
if (isset($data['name']) && isset($data['mail']) && isset($data['phone']) && isset($data['adult']) && isset($data['copil']) && isset($data['checkin_date']) && isset($data['message']) && isset($data['id_info']) && isset($data['id_user'])) {
    // Extract the data
    $name = $data['name'];
    $mail = $data['mail'];
    $phone = $data['phone'];
    $adult = $data['adult'];
    $copil = $data['copil'];
    $checkin_date = $data['checkin_date'];
    $message = $data['message'];
    $addOns = $data['addOns'];
    $id_info = $data['id_info'];
    $id_user= $data['id_user'];

    $sqlChecking = "SELECT id FROM `orders` WHERE name='$name' AND mail='$mail' AND phone='$phone' ";
    $stmt1 = mysqli_query($conn, $sqlChecking);
    if(mysqli_num_rows($stmt1) > 0){
        echo json_encode(['status' => 'error', 'message' => 'You already booked this offer']);
    }else{
        try {
            $stmt = mysqli_query($conn, "INSERT INTO orders (name, mail, phone, adults, children, `check-in`, preference, `add-ons`,`id_info`,`id_user`) VALUES ('$name', '$mail', '$phone', '$adult', '$copil', '$checkin_date', '$message','$addOns','$id_info','$id_user')") or die(mysqli_error($conn));
    
            // Return a success response
            echo json_encode(['status' => 'success', 'message' => 'Order inserted successfully!']);
        } catch (Exception $e) {
            // Return an error response if the insertion fails
            echo json_encode(['status' => 'error', 'message' => 'Failed to insert order: ' . $e->getMessage()]);
        }
    }

    
} else {
    // Return an error response if data is missing
    echo json_encode(['status' => 'error', 'message' => 'Missing required data.']);
}
?>

