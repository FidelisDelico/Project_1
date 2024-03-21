<?php
require_once("dbconnect_contact.php");

$query = "INSERT INTO contact_form (name, email, subject, message) VALUES (?, ?, ?, ?)";

if ($stmt = mysqli_prepare($connect, $query)) {
    
    mysqli_stmt_bind_param($stmt, "ssss", $_POST["name"], $_POST["email"], 
    $_POST["subject"], $_POST["message"]);

    if (mysqli_stmt_execute($stmt)) {
        header("Location:displaycontactform.php");
    } else {
        die("Execute failed: " . mysqli_error($connect));
    }

    mysqli_stmt_close($stmt); 
} else {
    die("Prepare failed: " . mysqli_error($connect));
}

mysqli_close($connect);
?>
