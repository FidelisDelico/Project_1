<!DOCTYPE html>
<html lang="en">
<head>
  <title>Delico's Restaurant </title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="Contact.css">
</head>
<body>
  <br>
  
  <?php include_once('nav.html') ?>

 <br>
 <br>
 <div class="container">
  <h2 style="color: aliceblue; background-color: black;">Contact Us</h2>
  <form action="#" method="post">
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
<div class="footer">
  <p>&copy; 2024 Your Website. All Rights Reserved. | Designed by Asizo Fidelis</a></p>
</div>
  

  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>