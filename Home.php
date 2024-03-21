<!DOCTYPE html>
<html lang="en">
<head>
  <title>Delico's Restaurant </title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="Home.css">
  <style>
    @font-face {
      font-family: Beauty Ballerina;
      src: url(bootstrap/Fonts/Beauty_Ballerina.otf);
    }
    
    .carousel-item img {
      width: 100%;
      height: auto;
      max-height: 700px;
      object-fit: cover;
      margin: auto; 
    }

    .carousel-item {
      text-align: center; 
      justify-content: center;
      align-items: center;
    }
    
    .overlay-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgba(39, 33, 33, 0.5); 
      color: rgb(248, 231, 231);
      border-radius: 10px;
      padding: 10px;
      text-align: center;
      width: 80%; 
    }

    .overlay-text h2 {
      margin: 0;
      font-size: 24px;
    }

    .overlay-text p {
      margin: 10px 0;
      font-size: 18px;
    }

    .AA {
      width: 30%;
    }

    .div, img {
      border-radius: 10px;
    }

    .text-bg-light {
      border-radius: 10px;
    }

    .carousel-item {
      transition: transform 2s ease;
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

    .text-bg-light-button {
      background-color: #ffc107; 
      color: #343a40; 
      border: none;
      border-radius: 5px; 
      padding: 8px 16px; 
      font-size: 14px; 
      cursor: pointer; 
      transition: background-color 0.3s, color 0.3s; 
    }

    .text-bg-light-button:hover {
      background-color: #343a40; 
      color: #ffc107; 
    }
    .navbar {
    background-color: rgba(0, 0, 0, 0); 
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

   <div id="carouselExample" class="carousel slide" data-bs-interval="5000" data-bs-ride="carousel">
		<center>
		<div class="carousel-inner ">
		  <div class="carousel-item active">
			
			<img src="Images/Hero Images/beyti-kebab-served-with-ayran-pickles.jpg" alt="GFG"  class="d-block " alt="...">
		  </div>
		  <div class="carousel-item">
		
			<img src="Images/Hero Images/finely-grilled-local-sac-ichi-food-served-with-lavash-pieces.jpg" alt="GFG" class="d-block  " alt="...">
		  </div>
		  <div class="carousel-item">

        <img src="Images/Hero Images/front-view-served-table-with-cocktails.jpg" alt="GFG" class="d-block  " alt="...">
		  </div>
		  <div class="carousel-item">

        <img src="Images/Hero Images/top-view-crispy-fried-meat-slices-served-with-vegetable-salad.jpg" alt="GFG" class="d-block  " alt="...">
		  </div>
		  <div class="carousel-item">

        <img src="Images/Hero Images/various-salads-made-from-mashed-vegetables.jpg" alt="GFG" class="d-block  " alt="...">
		  </div>
		  <div class="carousel-item">
	
			<img src="Images/Hero Images/turkish-stuffed-eggplants-with-ground-beef-vegetables-baked-with-tomato-sauce.jpg" alt="GFG"  class="d-block " alt="...">
		  </div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		</button>
		</center>
	  </div>      
      </div>

      <div class="overlay-text">
        <H1 class="display-3">Welcome To</H1>
        <img class="AA"   src="Images/Untitled-2.png" alt="">

      </div>


      <div class="container-xxl">
  <div class="row">
    <h1 class="align-content-center text-light bg-warning" style="text-align: center;">OUR MENU</h1>

    <div class="col-2">
      <br>
      <img src="Images/menu images/french fries.JPG" alt="" class="img-fluid">
      <button class="text-bg-light-button" onclick="toggleInfo('FrenchFries')">French Fries</button>
      
      <div id="FrenchFries-info" style="display: none;"> 
        <p class="text-light">Potatoes, vegetable oil for frying, salt.</p>
        <h6 class="text-warning">UGX:7,000</h6>
        <a href="Services.php">
          <button onclick="orderNow('French Fries')" class="text-bg-light-button">Order Now</button>
        </a>
      </div>
    </div>

    
    
    <div class="col-2">
      <br>
      <img src="Images/menu images/fried chicken.JPG" alt="" class="img-fluid">
      <button class="text-bg-light-button" onclick="toggleInfo('FriedChicken')">Fried Chicken</button>
      
      <div id="FriedChicken-info" style="display: none;"> 
        <p class="text-light"> Chicken pieces (such as wings, thighs, or drumsticks), flour, 
          seasoning (such as salt, pepper, paprika), vegetable oil for frying.</p>
          <h6 class="text-warning">UGX:25,000</h6>
        <a href="Services.php">
          <button onclick="orderNow('Fried Chicken')" class="text-bg-light-button">Order Now</button>
        </a>
      </div>
    </div>
   
    <div class="col-2">
      <br>
      <img src="Images/menu images/hot-dog.JPG" alt="" class="img-fluid">
      <button class="text-bg-light-button" onclick="toggleInfo('HotDog')">HotDog</button>
      
      <div id="HotDog-info" style="display: none;"> 
        <p class="text-light">Hot dog sausage, hot dog bun, mustard, ketchup, onions, relish, sauerkraut.</p>
        <h6 class="text-warning">UGX:10,000</h6>
        <a href="Services.php">
          <button onclick="orderNow('Hot Dog')" class="text-bg-light-button">Order Now</button>
        </a>
      </div>
    </div>
    <div class="col-2">
      <br>
      <img src="Images/menu images/pizza2.JPG" alt="" class="img-fluid">
      <button class="text-bg-light-button" onclick="toggleInfo('pizza2')">Pizza</button>
      
      <div id="pizza2-info" style="display: none;"> 
        <p class="text-light">Pizza dough, tomato sauce, mozzarella cheese, pepperoni, 
          mushrooms, onions, olives, bell peppers.</p>
          <h6 class="text-warning">UGX:15,000</h6>
        <a href="Services.php">
          <button onclick="orderNow('pizza2')" class="text-bg-light-button">Order Now</button>
        </a>
      </div>
    </div>
    <div class="col-2">
      <br>
      <img src="Images/menu images/tacos.JPG" alt="" class="img-fluid">
      <button class="text-bg-light-button" onclick="toggleInfo('tacos')">Tacos</button>
      
      <div id="tacos-info" style="display: none;"> 
        <p class="text-light"> Corn or wheat tortillas, seasoned meat (beef, chicken, pork), lettuce, 
          cheese, salsa, sour cream.</p>
          <h6 class="text-warning">UGX:10,000</h6>
        <a href="Services.php">
          <button onclick="orderNow('tacos')" class="text-bg-light-button">Order Now</button>
        </a>
      </div>
    </div>
    <div class="col-2">
      <br>
      <img src="Images/menu images/Hamburger.JPG" alt="" class="img-fluid">
      <button class="text-bg-light-button" onclick="toggleInfo('Hamburger')">Hamburger</button>
    
      <div id="Hamburger-info" style="display: none;"> 
        <p class="text-light">Beef patty, hamburger bun, lettuce, tomato, onion, pickles, 
          cheese, ketchup, mustard.</p>
          <H6 class="text-warning">UGX:20,000</H6>
        <a href="Services.php">
          <button onclick="orderNow('Hamburger')" class="text-bg-light-button">Order Now</button>
        </a>
      </div>
    </div>
   
</div>

<div class="text-center mt-4">
  <a href="Menu.php"> <button class="text-bg-light-button">Explore Our Menu</button></a> 
 
</div>

<script>
  function toggleInfo(menuItem) {
    var info = document.getElementById(menuItem + "-info");
    if (info.style.display === "none") {
      info.style.display = "block";
    } else {
      info.style.display = "none";
    }
  }

  function orderNow(menuItem) {
    window.location.href = "services.html";
  }
</script>

      <br>
  <div class="content">
    <div class="long-row bg-light-subtle text-center p-lg-5">
      <h1>Our Mission</h1>
        <p>At Delico's, we are driven by a commitment to excellence in every aspect of our craft. From the carefully curated ingredients to the meticulous preparation of each dish, we strive to delight your senses and nourish your soul with every bite. Our mission is to create unforgettable dining experiences that inspire connection, joy, and culinary discovery.</p>
        
    </div>
</div>


<footer>
  <p>&copy; 2024 Delico's Restaurant. All rights reserved.</p>
</footer>
  

  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>