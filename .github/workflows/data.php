<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $gas = $_POST['gas'];
    $distance = $_POST['distance'];
    $temperature = $_POST['temperature'];
    
    if ($gas < 500 && $distance > 10 && $temperature > 20) {
        $token = rand(100000, 999999);
        echo json_encode(["status" => "success", "token" => $token]);
    } else {
        echo json_encode(["status" => "failed", "message" => "Unsafe Conditions"]);
    }
}
?>
