<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Delico's Restaurant</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="Projects.css">
<style>
 .navbar {
  display: flex;
  justify-content: center; /* Center align horizontally */
  align-items: center; /* Center align vertically */
  background-color: rgba(52, 58, 64, 0.7);
}

.navbar-brand img {
  width: 60px;
}

.navbar-nav {
  display: flex; /* Use flexbox for better alignment */
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
      background-color: smokewhite; /* Transparent black background */
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

<section class="banner">
  <h1 class="display-3  p-4" style="border-radius: 10px; background-color: rgba(233, 241, 120, 0.58);">Welcome to Delico's</h1>
  <p style="color: aliceblue; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ; border-radius: 5px;"
  
   class="display-6 text-bg-dark">Discover our latest projects and culinary creations.</p>
</section>

<!-- Main Content Section -->
<main class="container">
  <h1 style="text-align: center; border-radius: 5px;" class="display-4 text-bg-dark">Our Projects</h1>
  <section class="projects">

    <div class="project">
      <img src="Images/mid-section-male-chef-holding-prepared-beef-steak-with-vegetables.jpg" alt="Project 2">
      <h3>Chef's Special Beef Steak</h3>
      <p>Chef's Special Beef Steak Served with grilled vegitables.</p>
    </div>

    <div class="project">
      <img src="Images/vegitables.jpg" alt="Project 1">
      <h3>Farm-to-Table Experience</h3>
      <p>Explore our commitment to using locally sourced ingredients.</p>
    </div>

    <div class="project">
      <img src="Images/adam-bartoszewicz-KoAV43S5ok8-unsplash.jpg" alt="Project 2">
      <h3>Chef's Special Events</h3>
      <p>Discover our exclusive dining experiences hosted by our top chefs.</p>
    </div>

    <div class="project">
      <img src="Images/low-angle-man-holding-plate-drink.jpg" alt="Project 2">
      <h3>Community Outreach Programmes </h3>
      <p>Experience our outreach programmes with Specials from amazing chefs.</p>
    </div>

    <div class="project">
      <img src="Images/happy-family-funny-kids-are-preparing-fresh-vegetable-salad-kitchen.jpg" alt="Project 2">
      <h3>Chef Children</h3>
      <p>Creating a generation of young and talented chefs.</p>
    </div>

    <div class="project">
      <img src="Images/multiethnic-male-cooks-standing-restaurant-professional-kitchen-with-arms-crossed-while-preparing-ingredients-dish-culinary-experts-wearing-chef-hats-while-standing-near-cooking-station.jpg" alt="Project 2">
      <h3>Annual Chef Competition</h3>
      <p>Come be part of our Annual Amazing Chef Competitions.</p>
    </div>
  
  </section>
</main>

<footer>
  <p>&copy; 2024 Delico's Restaurant. All rights reserved.</p>
</footer>

<script type="Text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>