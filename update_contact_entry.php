<?php
require_once("dbconnect_contact.php");

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    
    $sql = "UPDATE contact_form SET name=?, email=?, subject=?, message=? WHERE id=?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("ssssi", $name, $email, $subject, $message, $id);

    if ($stmt->execute()) {
        header("Location:displaycontactform.php");
    } else {
        echo "Error updating entry: " . $stmt->error;
    }

    $stmt->close();
}

$connect->close();
?>
