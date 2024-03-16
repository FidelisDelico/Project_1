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
    max-height: 700px; /* Adjust the maximum height as needed */
    object-fit: cover;
    margin: auto; /* Center the images horizontally */
}

.carousel-item {
    text-align: center; /* Center the images vertically */
    
    justify-content: center;
    align-items: center;
}
            
.overlay-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(39, 33, 33, 0.5); /* Black with 50% opacity */
    color: rgb(248, 231, 231);
    border-radius: 10px;
    padding: 10px;
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

      

</style>

</head>
<body>
  
  <?php include_once('nav.html') ?>
   

   <div id="carouselExample" class="carousel slide" data-bs-interval="5000" data-bs-ride="carousel">
		<center>
		<div class="carousel-inner ">
		  <div class="carousel-item active">
			
			<img src="bootstrap/Images/Hero Images/beyti-kebab-served-with-ayran-pickles.jpg" alt="GFG"  class="d-block " alt="...">
		  </div>
		  <div class="carousel-item">
		
			<img src="bootstrap/Images/Hero Images/finely-grilled-local-sac-ichi-food-served-with-lavash-pieces.jpg" alt="GFG" class="d-block  " alt="...">
		  </div>
		  <div class="carousel-item">

        <img src="bootstrap/Images/Hero Images/front-view-served-table-with-cocktails.jpg" alt="GFG" class="d-block  " alt="...">
		  </div>
		  <div class="carousel-item">

        <img src="bootstrap/Images/Hero Images/top-view-crispy-fried-meat-slices-served-with-vegetable-salad.jpg" alt="GFG" class="d-block  " alt="...">
		  </div>
		  <div class="carousel-item">

        <img src="bootstrap/Images/Hero Images/various-salads-made-from-mashed-vegetables.jpg" alt="GFG" class="d-block  " alt="...">
		  </div>
		  <div class="carousel-item">
	
			<img src="bootstrap/Images/Hero Images/turkish-stuffed-eggplants-with-ground-beef-vegetables-baked-with-tomato-sauce.jpg" alt="GFG"  class="d-block " alt="...">
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
        <img class="AA"   src="bootstrap/Images/Untitled-2.png" alt="">

      </div>


  <div class="container-xxl">
  
    <div class="row">
      <h1 class=" display-4 align-content-center text-danger bg-light-subtle" style="text-align: center;">Our Menu</h1>
      <div class="col-2">
        <br>
        <img src="bootstrap/Images/hot-dog-5337929_1280.jpg" alt="" class="img-fluid">
        <p class="text-bg-light">Hot Dog</p>
      </div>
      <div class="col-2">
        <br>
        <img src="bootstrap/Images/grilled-chicken-1334632_1280.jpg" alt="" class="img-fluid">
        <p class="text-bg-light">Grilled Chicken</p>
      </div>
      <div class="col-2">
        <br>
        <img src="bootstrap/Images/cappuccino-756490_1280.jpg" alt="" class="img-fluid">
        <p class="text-bg-light">Cappuccino</p>
      </div>
      <div class="col-2">
        <br>
        <img src="bootstrap/Images/beans-799533_1280.jpg" alt="" class="img-fluid">
        <p class="text-bg-light">English Breakfast</p>
      </div>
      <div class="col-2">
        <br>
        <img src="bootstrap/Images/pizza-3010062_1280.jpg" alt="" class="img-fluid">
        <p class="text-bg-light">Pizza</p>
      </div>
      <div class="col-2">
        <br>
        <img src="bootstrap/Images/asparagus-2169305_1280.jpg" alt="" class="img-fluid">
        <p class="text-bg-light">Steak</p>
      </div>

    </div>
  </div>

    </div>
  </div>

  

  <div class="container-fluid">

    <div class="row justify-content-center">
      <div class="col-md-3">
        <img src="bootstrap/Images/rolex-rolled-eggs.jpg" alt="" class="img-fluid">
        <p class="text-bg-light text-center">Rolex</p>
      </div>
      <div class="col-md-3">
        <img src="bootstrap/Images/pasta-dish-restaurant-table.jpg" alt="" class="img-fluid">
        <p class="text-bg-light text-center">lasagna</p>
      </div>
      <div class="col-md-3">
        <img src="bootstrap/Images/side-view-pilaf-with-stewed-beef-meat-plate.jpg" alt="" class="img-fluid">
        <p class="text-bg-light text-center">Beef Pilau</p>
      </div>
    </div>
  </div>
      <br>
  <div class="container-fluid">
    <div class="row">
      <div>
        <div class="col">
          <div class="p-lg-5  text-warning" style="text-align: center;"></div>
        </div>
      </div> 
      </div>
    </div>
  </div>

  <div class="content">
    <div class="long-row bg-light-subtle text-center p-lg-5">
      <h1>Our Mission</h1>
        <p>At Delico's, we are driven by a commitment to excellence in every aspect of our craft. From the carefully curated ingredients to the meticulous preparation of each dish, we strive to delight your senses and nourish your soul with every bite. Our mission is to create unforgettable dining experiences that inspire connection, joy, and culinary discovery.</p>
        
    </div>
</div>


 <footer class="p-3">
  <p class="text-light">2024 Delico's. All Rights Reserved. | Designed by Asizo Fidelis</p>
 </footer>
  

  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>