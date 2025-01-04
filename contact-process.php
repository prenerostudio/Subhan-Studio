<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $contact_name = $_POST['name'];
    $contact_email = $_POST['email'];
    $contact_subject = $_POST['subject'];
    $contact_phone = $_POST['phone'];
    $contact_message = $_POST['message'];

    $sql = "INSERT INTO `contact` (`contact_name`, `contact_email`, `contact_subject`, `contact_phone`, `contact_message`) VALUES (?, ?, ?, ?, ?)";
    $stmt = $connect->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssss", $contact_name, $contact_email, $contact_subject, $contact_phone, $contact_message);
        if ($stmt->execute()) {
            header("Location: contact.php");
            exit();
        } else {
            error_log("Database insert error: " . $stmt->error);
            header("Location: contact.php?error=true");
            exit();
        }
    } else {
        error_log("Database prepare error: " . $connect->error);
        header("Location: contact.php?error=true");
        exit();
    }
} else {
    header("Location: contact.php");
    exit();
}
?>
