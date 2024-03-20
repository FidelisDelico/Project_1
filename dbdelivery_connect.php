<?php
require_once("dbdelivery_form.php");

$query = "INSERT INTO user_info (name, email, phone, address, instructions) VALUES (?, ?, ?, ?, ?)";

if ($stmt = mysqli_prepare($connect, $query)) {
    
    mysqli_stmt_bind_param($stmt, "ssiss", $_POST["name"], $_POST["email"], 
    $_POST["phone"], $_POST["address"], $_POST["instructions"]);


    if (mysqli_stmt_execute($stmt)) {
        echo "Data inserted successfully.";
    } else {
        die("Execute failed: " . mysqli_error($connect));
    }


    mysqli_stmt_close($stmt); 
} else {
    
    die("Prepare failed: " . mysqli_error($connect));
}

mysqli_close($connect);
?>
