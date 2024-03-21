<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Entries</title>
    <link rel="stylesheet" href="displaycontactform.css">
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
                        <td>
                        <button class='edit-button' onclick='editRow(this)'>Edit</button>
                        <button class='delete-button' onclick='deleteRow(this)'>Delete</button>
                        </td>
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

    <script>
        function editRow(button) {
            var row = button.parentNode.parentNode;
            var cells = row.getElementsByTagName("td");
            for (var i = 1; i < cells.length - 1; i++) {
                var value = cells[i].innerText;
                var newValue = prompt("Enter new value for " + cells[i].previousElementSibling.innerText + ":", value);
                if (newValue !== null) {
                    cells[i].innerText = newValue;
                }
            }
        }

        function deleteRow(button) {
            var confirmation = confirm("Are you sure you want to delete this entry?");
            if (confirmation) {
                var row = button.parentNode.parentNode;
                row.parentNode.removeChild(row);
            }
        }
    </script>

    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
