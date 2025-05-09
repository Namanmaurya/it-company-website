<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

header('Content-Type: application/json');

$response = ["success" => false, "message" => ""];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject = trim($_POST['subject'] ?? '');
    $name = trim($_POST['name'] ?? '');
    $contact =trim($_POST['contact'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $msg = trim($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($msg)) {
        $response["message"] = "All fields are required.";
        echo json_encode($response);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response["message"] = "Invalid email format.";
        echo json_encode($response);
        exit;
    }

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'namanm0021@gmail.com'; 
        $mail->Password   = 'vwqt ofpg ekuj ooyz'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('namanm0021@gmail.com', 'Naman kumar Maurya');
        $mail->addAddress('namanm0021@gmail.com', 'Naman Kumar Maurya');

        $mail->isHTML(true);
        $mail->Subject = 'New Query';
        $mail->Body    = " Subject: <strong>$subject</strong><br>Sender Name: <strong>$name</strong><br>Sender Email: <strong>$email</strong><br>Phone Number:$contact<br>Message:$msg";

        $mail->send();
        $response["success"] = true;
        $response["message"] = "Your message has been sent successfully!";
    } catch (Exception $e) {
        $response["message"] = "Message could not be sent. Error: {$mail->ErrorInfo}";
    }
}

echo json_encode($response);
?>
