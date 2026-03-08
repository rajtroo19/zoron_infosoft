<?php
require_once '../includes/config.php';

// Set header to return JSON
header('Content-Type: application/json');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
    exit;
}

// Function to sanitize input
function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Get and sanitize POST data
$first_name = clean_input($_POST['first_name'] ?? '');
$last_name  = clean_input($_POST['last_name'] ?? '');
$email      = clean_input($_POST['email'] ?? '');
$phone      = clean_input($_POST['phone'] ?? '');
$subject    = clean_input($_POST['subject'] ?? 'Website Contact Inquiry');
$message    = clean_input($_POST['message'] ?? '');

// Validation
if (empty($first_name) || empty($last_name) || empty($email) || empty($phone) || empty($message)) {
    echo json_encode(['success' => false, 'message' => 'Please fill all required fields.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
    exit;
}

// Prepare Email content
$to = CONTACT_EMAIL;
$email_subject = "New Contact Entry: " . $subject;
$email_body = "You have received a new message from the website contact form.\n\n".
              "Name: $first_name $last_name\n".
              "Email: $email\n".
              "Phone: $phone\n\n".
              "Message:\n$message\n";

$headers = "From: noreply@zoroninfosoft.com\n";
$headers .= "Reply-To: $email";

// Send email (In local environment, mail() usually fails without setup, but this is the standard implementation)
// For testing purposes locally, we simulate success
$simulate_local = false; 

if ($simulate_local) {
    // Simulated success for demo/local environment
    echo json_encode(['success' => true, 'message' => 'Message successfully sent! We will contact you shortly.']);
} else {
    // Actual mail sending
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo json_encode(['success' => true, 'message' => 'Message successfully sent!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to send message. Please check your local mail server configuration.']);
    }
}
?>
