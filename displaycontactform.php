<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Entries</title>
    <link rel="stylesheet" href="displaycontactform.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

    <?php include_once('nav.html') ?>

    <div class="container">
        <h1 class=" bg-light-subtle">Contact Form Entries</h1>
        <?php
        require_once("dbconnect_contact.php");

      
        if ($connect->connect_error) {
            die("Connection failed: " . $connect->connect_error);
        }

        $sql = "SELECT id, name, email, subject, message FROM contact_form";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
          
            echo "<table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["subject"] . "</td>
                        <td>" . $row["message"] . "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

     
        $connect->close();
        ?>
    </div>

    <footer>
        <p>&copy; 2024 Delico's Restaurant. All rights reserved.</p>
    </footer>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
