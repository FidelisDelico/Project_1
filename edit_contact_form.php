<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact Form Entry</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        body {
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100%;
    background-image: url(Images/impatient-pizza-delivery-driver-poses-fast-motorbike.jpg);
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
    }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .row {
            display: flex;
            justify-content: center; 
            margin-top: 50px; 
        }
        .form-group {
            margin-bottom: 20px;
            display: flex;
            flex-wrap: wrap;
        }
        .form-group label {
            width: 150px;
            flex: 0 0 150px; 
            font-weight: bold;
        }
        .form-group input[type="text"],
        .form-group textarea {
            flex: 1; 
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px; 
        }
        .navbar {
        background-color: rgba(52, 58, 64, 0.7);
    }
    
    .navbar-brand img {
        width: 60px;
    }
    
    .navbar-nav {
        margin-left: auto; 
    }
    
    .nav-item {
        margin-right: 15px; 
    }
    
    .nav-link {
        color: #fff !important; 
        transition: background-color 0.3s; 
    }
    
    .nav-link:hover,
    .nav-link.active {
        background-color: #ffc107; 
        color: #343a40 !important; 
    }
    footer {
        background-color: rgba(0, 0, 0, 0.7); 
        color: #fff; 
        text-align: center; 
        padding: 20px 0; 
        bottom: 0; 
        width: 100%; 
        z-index: 9999; 
      }
      h1 {
    border-radius: 5px;
    text-align: center;
    }
    </style>
</head>
<body>
<?php
include_once('nav.html');
require_once("dbconnect_contact.php");

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

$row = []; 
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT id, name, email, subject, message FROM contact_form WHERE id=?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
}

$connect->close();
?>

<div class="row">
<h1 class="bg-light">Edit Contact Form Entry</h1>
    <div class="container">
        
        <form action="update_contact_entry.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo isset($row['name']) ? $row['name'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?php echo isset($row['email']) ? $row['email'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" value="<?php echo isset($row['subject']) ? $row['subject'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required><?php echo isset($row['message']) ? $row['message'] : ''; ?></textarea>
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo isset($row['id']) ? $row['id'] : ''; ?>">
                <button type="submit" class="btn" name="edit">Edit</button>
            </div>
        </form>
    </div>
</div>

<footer>
    <p>&copy; 2024 Delico's Restaurant. All rights reserved.</p>
</footer>

<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
