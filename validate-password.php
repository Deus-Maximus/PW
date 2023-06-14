<?php
// Retrieve the entered password from the request
$enteredPassword = $_POST['password'];

// Define the correct password
$correctPassword = '1234';

// Check if the entered password matches the correct password
if ($enteredPassword === $correctPassword) {
    // Password is correct, return a success response
    echo 'success';
} else {
    // Password is incorrect, return an error response
    echo 'error';
}
?>
