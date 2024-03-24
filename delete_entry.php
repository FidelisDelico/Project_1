<?php
// Check if the ID parameter is set and not empty
if(isset($_POST['id']) && !empty($_POST['id'])) {
    // Sanitize the ID to prevent SQL injection
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    
    // Include database connection file
    require_once("dbconnect_contact.php");

    // Prepare a SQL statement to delete the entry with the specified ID
    $sql = "DELETE FROM contact_form WHERE id = ?";
    
    // Prepare and execute the statement
    if($stmt = $connect->prepare($sql)) {
        $stmt->bind_param("i", $id);
        
        // Attempt to execute the statement
        if($stmt->execute()) {
            // If deletion is successful, send a success response
            http_response_code(200);
            echo "Entry deleted successfully";
        } else {
            // If deletion fails, send an error response
            http_response_code(500);
            echo "Error deleting entry: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        // If preparation of the statement fails, send an error response
        http_response_code(500);
        echo "Error preparing statement: " . $connect->error;
    }
    
    // Close the database connection
    $connect->close();
} else {
    // If ID parameter is not set or empty, send a bad request response
    http_response_code(400);
    echo "Bad request: ID parameter is missing or empty";
}
?>
