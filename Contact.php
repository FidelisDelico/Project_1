<!DOCTYPE html>
<html lang="en">
<head>
  <title>Delico's Restaurant </title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="Contact.css">

  <style>

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
      background-color: rgba(0, 0, 0, 0.7); /* Transparent black background */
      color: #fff; /* White text color */
      text-align: center; /* Center align the text */
      padding: 20px 0; /* Add padding for better readability */
      
      bottom: 0; /* Align at the bottom */
      width: 100%; /* Full width */
      z-index: 9999; /* Ensure it appears on top of other content */
    }


  </style>
</head>
<body>
  
<?php include_once('nav.html') ?>

 
 <div class="container">
  <h2 style="color: aliceblue; background-color: black;">Contact Us</h2>
  <form action="dbcontact_form.php" method="POST">
      <div>
          <label for="name">Your Name:</label>
          <input type="text" id="name" name="name" required>
      </div>
      <div>
          <label for="email">Your Email:</label>
          <input type="email" id="email" name="email" required>
      </div>
      <div>
          <label for="subject">Subject:</label>
          <input type="text" id="subject" name="subject" required>
      </div>
      <div>
          <label for="message">Message:</label>
          <textarea id="message" name="message" rows="5" required></textarea>
      </div>
      <div>
          <input type="submit" value="Submit">
      </div>
  </form>
</div>
<br>

<footer>
  <p>&copy; 2024 Delico's Restaurant. All rights reserved.</p>
</footer>
  

  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>