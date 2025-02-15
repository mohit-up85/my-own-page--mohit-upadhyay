<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "mohitupadhyay12007@gmail.com";
    $subject = "New SSC CGL Application Submission";
    
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $qualification = $_POST['qualification'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    
    $message = "New SSC CGL Application Submission:\n\n";
    $message .= "Full Name: $name\n";
    $message .= "Date of Birth: $dob\n";
    $message .= "Gender: $gender\n";
    $message .= "Father's Name: $father_name\n";
    $message .= "Mother's Name: $mother_name\n";
    $message .= "Email: $email\n";
    $message .= "Mobile Number: $mobile\n";
    $message .= "Qualification: $qualification\n";
    $message .= "Address: $address\n";
    $message .= "State: $state\n";
    $message .= "Pincode: $pincode\n";
    
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Application submitted successfully!";
    } else {
        echo "Error submitting application.";
    }
} else {
    echo "Invalid request.";
}
?>
