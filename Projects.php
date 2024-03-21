<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delico's Projects</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="Projects.css">
  <style>
    body {
    background-color: whitesmoke;
}
    .hero-image {
      background-image: url('Images/creative-italian-food-concept-with-space-middle.JPG');
      background-size: cover;
      background-position: center;
      height: 400px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      text-align: center;
    }

    .projects-heading {
      margin-top: 50px;
      margin-bottom: 30px;
      text-align: center;
    }

    .card {
      margin-bottom: 30px;
    }

    .card-img-top {
      height: 200px;
      object-fit: cover;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .card-body {
      padding: 20px;
    }

    .read-more {
      display: none;
    }

    .card:hover .read-more {
      display: block;
    }
    .navbar {
    background-color: black;
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
  </style>
</head>
<body>

<?php include_once('nav.html') ?>
  
  
  <div class="hero-image">
    <h1>Welcome to Delico's Projects</h1>
  </div>

  
  <div class="container">
    <h1 class="projects-heading bg-warning text-light">PROJECTS</h1>
    <div class="row">
    
      <div class="col-md-4">
        <div class="card">
          <img src="Images/vegitables.JPG" class="card-img-top" alt="Project 1">
          <div class="card-body">
            <h5 class="card-title">Farm-to-Table Initiative</h5>
            <p class="card-text">A farm-to-table initiative emphasizes sourcing fresh, locally sourced 
              ingredients directly from farmers and producers to use in your restaurant's menu offerings.</p>
            <button class="btn btn-primary read-more" data-toggle="collapse" data-target="#project1-info">Read More</button>
            <div id="project1-info" class="collapse">
              <p>This project involves establishing partnerships with local farmers, artisans, 
              and suppliers to procure high-quality, seasonal ingredients that reflect the region's 
              culinary bounty. By embracing a farm-to-table approach, you support local agriculture, 
              promote sustainability, and offer customers a unique dining experience centered on fresh, 
              flavorful ingredients with traceable origins.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="Images/hunger-relief-disabled-individuals.JPG" class="card-img-top" alt="Project 2">
          <div class="card-body">
            <h5 class="card-title">Chef Community Outreach</h5>
            <p class="card-text">Community outreach initiatives involve actively engaging with local communities through sponsorships, partnerships, or participation in events and activities.</p>
            <button class="btn btn-primary read-more" data-toggle="collapse" data-target="#project2-info">Read More</button>
            <div id="project2-info" class="collapse">
              <p>This project may include sponsoring local sports teams, participating in charity fundraisers, 
                or hosting community events such as food drives or neighborhood clean-up efforts. 
                By demonstrating your restaurant's commitment to community involvement and social 
                responsibility, you strengthen ties with residents, increase brand awareness, and 
                foster positive word-of-mouth referrals.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="Images/impatient-pizza-delivery-driver-poses-fast-motorbike.JPG" class="card-img-top" alt="Project 3">
          <div class="card-body">
            <h5 class="card-title">Food Delivery Service</h5>
            <p class="card-text">A food delivery service enables customers to enjoy your restaurant's cuisine from the comfort of their homes or offices by offering delivery options for your menu items.</p>
            <button class="btn btn-primary read-more" data-toggle="collapse" data-target="#project3-info">Read More</button>
            <div id="project3-info" class="collapse">
              <p>This project may involve partnering with third-party delivery platforms, such as Uber Eats or 
                DoorDash, or establishing an in-house delivery operation with dedicated drivers. Offering food 
                delivery expands your customer reach, taps into the growing demand for off-premise dining 
                options, and provides an additional revenue stream for your restaurant.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 2024 Delico's Restaurant. All rights reserved.</p>
  </footer>

  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
