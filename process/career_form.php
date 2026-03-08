<?php
require_once '../includes/config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
    exit;
}

function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Fetch Inputs
$first_name = clean_input($_POST['first_name'] ?? '');
$last_name  = clean_input($_POST['last_name'] ?? '');
$email      = clean_input($_POST['email'] ?? '');
$phone      = clean_input($_POST['phone'] ?? '');
$role       = clean_input($_POST['role'] ?? '');
$emp_type   = clean_input($_POST['emp_type'] ?? '');
$message    = clean_input($_POST['message'] ?? '');

// Validation
if (empty($first_name) || empty($last_name) || empty($email) || empty($phone) || empty($role) || empty($emp_type) || empty($message)) {
    echo json_encode(['success' => false, 'message' => 'Please fill all required fields.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

// File Upload Handling
$uploaded_file = $_FILES['resume'] ?? null;
if (!$uploaded_file || $uploaded_file['error'] !== UPLOAD_ERR_OK) {
    echo json_encode(['success' => false, 'message' => 'Please upload a valid resume.']);
    exit;
}

// File Validation
$allowed_exts = ['pdf', 'doc', 'docx'];
$file_ext = strtolower(pathinfo($uploaded_file['name'], PATHINFO_EXTENSION));
$max_size = 5 * 1024 * 1024; // 5MB

if (!in_array($file_ext, $allowed_exts)) {
    echo json_encode(['success' => false, 'message' => 'Only PDF, DOC, and DOCX files are allowed.']);
    exit;
}
if ($uploaded_file['size'] > $max_size) {
    echo json_encode(['success' => false, 'message' => 'File size exceeds 5MB limit.']);
    exit;
}

// Since we are likely not fully configuring SMTP or an uploads folder locally,
// we will simulate the success response as well after validating.
// If necessary, we could move_uploaded_file() here.
$upload_dir = __DIR__ . '/../assets/uploads/';
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0755, true);
}
$dest_path = $upload_dir . time() . '_' . basename($uploaded_file['name']);
$file_moved = move_uploaded_file($uploaded_file['tmp_name'], $dest_path);

// Prepare Email content
$to = CAREER_EMAIL;
$email_subject = "New Career Application: " . $role;
$email_body = "You have received a new application from the website career page.\n\n".
              "Name: $first_name $last_name\n".
              "Email: $email\n".
              "Phone: $phone\n".
              "Role Applied: $role\n".
              "Employment Type: $emp_type\n\n".
              "Message / Cover Letter:\n$message\n\n".
              "Resume Path: $dest_path\n";

$headers = "From: noreply@zoroninfosoft.com\n";
$headers .= "Reply-To: $email";

// Send email
$simulate_local = false; 

if ($simulate_local) {
    echo json_encode([
        'success' => true, 
        'message' => 'Application submitted successfully! Our HR team will review your profile.'
    ]);
} else {
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo json_encode(['success' => true, 'message' => 'Application submitted successfully!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to send application. Please check your local mail server configuration.']);
    }
}
?>
