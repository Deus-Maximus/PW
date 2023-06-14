<?php
// Retrieve the entered password from the request body
$requestBody = file_get_contents('php://input');
$data = json_decode($requestBody, true);
$enteredPassword = $data['password'];

// Define the correct password
$correctPassword = '1234';

// Validate the entered password
$accessGranted = ($enteredPassword === $correctPassword);

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode(array('accessGranted' => $accessGranted));
?>
