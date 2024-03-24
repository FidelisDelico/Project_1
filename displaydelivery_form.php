<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Entries</title>
    <link rel="stylesheet" href="displaydelivery_form.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
</head>
<body>
    <?php 
    include_once('nav.html');
    require_once("dbdelivery_form.php");

    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $instructions = $_POST['instructions'];

        $sql = "UPDATE user_info SET name='$name', email='$email', phone='$phone', address='$address', instructions='$instructions' WHERE id='$id'";
        if ($connect->query($sql) === TRUE) {
            
        } else {
            echo "Error updating record: " . $connect->error;
        }
    }

    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];

        $sql = "DELETE FROM user_info WHERE id='$id'";
        if ($connect->query($sql) === TRUE) {
           
        } else {
            echo "Error deleting record: " . $connect->error;
        }
    }

    $sql = "SELECT id, name, email, phone, address, instructions FROM user_info";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        echo "<div class='container'>";
        echo "<h1 class='bg-light-subtle'>Delivery Form Entries</h1>";
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
                        <form method='POST' action='edit_entry.php'>
                            <input type='hidden' name='id' value='" . $row["id"] . "'>
                            <input type='hidden' name='name' value='" . $row["name"] . "'>
                            <input type='hidden' name='email' value='" . $row["email"] . "'>
                            <input type='hidden' name='phone' value='" . $row["phone"] . "'>
                            <input type='hidden' name='address' value='" . $row["address"] . "'>
                            <input type='hidden' name='instructions' value='" . $row["instructions"] . "'>
                            <button class='edit-button' type='submit' name='edit'>Edit</button>
                        </form>
                        <a href='?delete=" . $row["id"] . "' class='delete-button'>Delete</a>
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
    <footer>
        <p>&copy; 2024 Delico's Restaurant. All rights reserved.</p>
    </footer>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
