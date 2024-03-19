<!DOCTYPE html>
<html lang="en">
<head>
  <title>Delico's Restaurant </title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="about.css">
  <style>

.overlay-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0.5); /* Black with 50% opacity */
    color: white;
    padding: 20px;
    text-align: center;
    width: 80%; /* Adjust the width as needed */
}

.overlay-text h2 {
    margin: 0;
    font-size: 24px;
}

.overlay-text p {
    margin: 10px 0;
    font-size: 18px;
}

  </style>
</head>
<body class="bg-light-subtle">
  
<?php include_once('nav.html') ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-auto">

        <div class="overlay-text">
          <H1 class="display-3">Welcome To Delico's</H1>
          <p>Our Story</p>
          <p style="font-family: 'Times New Roman', Times, serif;">At Delico's, we invite you to embark on a culinary journey like no other. 
            Nestled in the heart of Ntinda, our restaurant is more than just a dining 
            destination; it's a celebration of flavors, traditions, and heartfelt hospitality.</p>
        </div>
        <img src="Images/turkish-stuffed-eggplants-with-ground-beef-vegetables-baked-with-tomato-sauce.jpg" class="img-fluid"> 

      </div>
      
    <div class="row">
      <div class="col-lg-6">
        <p style="text-align: center;" class="display-5" >Our Team</p>
        <div class="p-5 bg-light-subtle text-dark display-10 text-center">Behind every delicious dish and memorable dining experience
          is our dedicated team of chefs, servers, and staff. With a shared passion for hospitality and a 
          relentless pursuit of excellence, we strive to exceed your expectations with every visit. 
          From the kitchen to the dining room, we work tirelessly to ensure that your time with us is 
          nothing short of extraordinary.</div>
      </div>
      
      <div class="col-lg-6">
          <p style="text-align: center;" class="display-5">Our Cuisine</p>
          <div class="p-5">
            Our culinary philosophy is simple: to celebrate the vibrant flavors and diverse culinary traditions 
            that make up our world. From locally sourced ingredients to globally inspired recipes, our menu is a 
            testament to our commitment to quality, authenticity, and innovation. Whether you're craving a comforting 
            classic or eager to explore something new, there's something for everyone at Delico's.
          </div>
        </div>

        <div class="col-lg-6">
          <p style="text-align: center;" class="display-5">Our Mission</p>
          <div class="p-5">
            At Delico's, we are driven by a commitment to excellence in every aspect of our craft. 
            From the carefully curated ingredients to the meticulous preparation of each dish, we strive 
            to delight your senses and nourish your soul with every bite. Our mission is to create 
            unforgettable dining experiences that inspire connection, joy, and culinary discovery.
          </div>
        </div>
        <div class="col-lg-6">
          <p style="text-align: center;" class="display-5">Community Engagement</p>
          <div class="p-5">
            At Delico's, we believe in giving back to the community that has embraced us with open arms. 
            Whether it's through supporting local farmers and producers, participating in charitable 
            events, or fostering meaningful connections with our neighbors, we are proud to be an 
            integral part of the vibrant tapestry of Ntinda.
          </div>
        </div>
        
      </div>
      
  </div>

    </div>
  </div>

  <div class="contact-form">
    <h2>Contact Us</h2>
    <form action="contact_form.php" method="POST">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        
        <input type="submit" value="Send Message">
    </form>
</div>

 
      <br>
  
<footer class="bg-dark-subtle p-3">
  <p>&copy; 2024 Your Restaurant Name. All rights reserved.</p>
</footer>
      
  </div> 
  

  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>