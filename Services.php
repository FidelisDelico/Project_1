<!DOCTYPE html>
<html lang="en">
<head>
  <title>Delico's Restaurant </title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="Services.css">
<style>

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}
.container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
h2 {
    text-align: center;
    margin-bottom: 20px;
}
label {
    font-weight: bold;
}
input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}
textarea {
    height: 100px;
}
input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}
input[type="submit"]:hover {
    background-color: #45a049;
}
form {
  padding: 90px;
  border-radius: 5px;
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


</style>
 
</head>
<body>
<?php include_once('nav.html') ?>


 <body>
  
  <div class="container-lg">
    <div class="row">
        <div class="column">
            <h2>.............</h2>
            <img src="Images/menu.jpg" alt="">
        </div>
        <div class="col-lg-6 bg-light-subtle">
          <br>
          <h2>Delivery Services Form</h2>
          <form action="dbdelivery_connect.php" method="POST">
              <label for="name">Your Name:</label>
              <input type="text" id="name" name="name" required>
              
              <label for="email">Your Email:</label>
              <input type="email" id="email" name="email" required>
              
              <label for="phone">Phone Number:</label>
              <input type="text" id="phone" name="phone" required>
              
              <label for="address">Delivery Address:</label>
              <textarea id="address" name="address" required></textarea>
              
              <label for="instructions">Delivery Instructions:</label>
              <textarea id="instructions" name="instructions"></textarea>
              
              <input type="submit" value="Submit Request">
          </form>
                </div>
            </div>
  
            </form>
            
      </div>
    </div>
</div>
<br>

<footer>
  <p>&copy; 2024 Delico's Restaurant. All rights reserved.</p>
</footer>
  

  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>