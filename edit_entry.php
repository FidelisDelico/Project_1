<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit_Entry_Form</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="edit_entry.css">
</head>
<style>
   .edit-button,
        .delete-button {
            background-color: #4CAF50; 
            border: none;
            color: white;
            padding: 8px 16px; 
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px; 
            margin-right: 8px; 
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s; 
        }

        .edit-button:hover {
            background-color: #45a049;  
        }

        .delete-button:hover {
            background-color: #d32f2f; 
        }
</style>
<body>
<?php
include_once('nav.html') ;
require_once("dbdelivery_form.php");

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $instructions = $_POST['instructions'];

    $sql = "UPDATE user_info SET name=?, email=?, phone=?, address=?, instructions=? WHERE id=?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("sssssi", $name, $email, $phone, $address, $instructions, $id);

    if ($stmt->execute()) {
        
    } else {
        echo "Error updating record: " . $stmt->error;
    }
    $stmt->close();
}

$sql = "SELECT id, name, email, phone, address, instructions FROM user_info";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='container'>";
    echo "<h1 class='bg-light-subtle'>Edit Entry</h1>";
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Instructions</th>
                <th>Action</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["phone"] . "</td>
                <td>" . $row["address"] . "</td>
                <td>" . $row["instructions"] . "</td>
                <td>
                    <form method='POST' action=''>
                        <input type='hidden' name='id' value='" . $row["id"] . "'>
                        <input type='text' name='name' value='" . $row["name"] . "'>
                        <input type='text' name='email' value='" . $row["email"] . "'>
                        <input type='text' name='phone' value='" . $row["phone"] . "'>
                        <input type='text' name='address' value='" . $row["address"] . "'>
                        <input type='text' name='instructions' value='" . $row["instructions"] . "'>
                        <button class='edit-button' type='submit' name='edit'>Edit</button>
                    </form>
                </td>
              </tr>";
    }
    echo "</table>";
    echo "</div>";
} else {
    echo "<div class='container'>";
    echo "<h1 class='bg-light-subtle'>Delivery Form Entries</h1>";
    echo "0 results";
    echo "</div>";
}

$connect->close();
?>
</body>
</html>

<footer>
    <p>&copy; 2024 Delico's Restaurant. All rights reserved.</p>
</footer>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
