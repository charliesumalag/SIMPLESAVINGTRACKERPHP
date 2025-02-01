<?php

use framework\Database;
// Assuming `basePath()` is defined earlier or included elsewhere.
require basePath('framework/Database.php'); // Database connection
$config = require basePath('config/db.php'); // DB configuration

// Create a new Database instance
$db = new Database($config);

// Check if the form has been submitted
$email = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the email from POST request
    $email = $_POST['email']; // no sanitization for simplicity
    // Echo the email for testing purpose
    echo "Email: " . $email;
}

// Load the home view (ensure no other outputs override this)
loadView('login');
