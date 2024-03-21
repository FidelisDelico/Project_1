<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="Menu.css">

  <style>
.order-btn {
    background-color: #ffc107; 
    color: #343a40; 
    border: none; 
    border-radius: 5px; 
    padding: 8px 16px; 
    font-size: 14px; 
    cursor: pointer; 
    transition: background-color 0.3s, color 0.3s; 
  }
  
  .order-btn:hover {
    background-color: #343a40; 
    color: #ffc107; 
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
.text-light {
    border-radius: 4px;
}

  </style>
</head>
<body>

<?php include_once('nav.html') ?>

<div class="container">
  <h1 class="text-light bg-warning">Menu</h1>
  <table>
    <thead>
      <tr>
        <th>Image</th>
        <th>Dish</th>
        <th>Description</th>
        <th>Price</th>
        <th>Order</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><img src="Images/menu images/beef burger with fries.JPG" alt="Dish 1" class="dish-img"></td>
        <td>Hambuger & Fries</td>
        <td>Beef patty, hamburger bun, lettuce, tomato, onion, pickles, cheese, ketchup, mustard and 
            French Fries
        </td>
        <td>UGX:15,000</td>
        <td><a href="Services.php" class="order-btn">Order Now</a></td>
      </tr>
      <tr>
        <td><img src="Images/menu images/pizza3.JPG" alt="Dish 1" class="dish-img"></td>
        <td>Pizza & Salami Slices Large</td>
        <td>Pizza dough, tomato sauce, mozzarella cheese, pepperoni, mushrooms, onions, olives, 
            bell peppers and salami slices.
        </td>
        <td>UGX:30,000</td>
        <td><a href="Services.php" class="order-btn">Order Now</a></td>
      </tr>
      <tr>
        <td><img src="Images/menu images/chicken2.JPG" alt="Dish 1" class="dish-img"></td>
        <td>2Chicken pices served with Fries</td>
        <td>2 Chicken pieces (such as wings, thighs, or drumsticks), flour, 
            seasoning (such as salt, pepper, paprika), vegetable oil for frying.
        </td>
        <td>UGX:17,000</td>
        <td><a href="Services.php" class="order-btn">Order Now</a></td>
      </tr>
      
    </tbody>
    <div class="col-md-6">
      <table>
        <br>
      <h1 class="text-light bg-warning">Drinks</h1>
        <thead>
          <tr>
            <th>Drink</th>
            <th>Description</th>
            <th>Price</th>
            <th>Order</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Coke</td>
            <td>Refreshing cola drink</td>
            <td>UGX:3,000</td>
            <td><a href="Services.php" class="order-btn">Order Now</a></td>
          </tr>
          <tr>
            <td>Fanta</td>
            <td>Refreshing fanta drink</td>
            <td>UGX:2,500</td>
            <td><a href="Services.php" class="order-btn">Order Now</a></td>
          </tr>
          <tr>
            <td>Mango Juice</td>
            <td>Refreshing fresh mango juice</td>
            <td>UGX:3,500</td>
            <td><a href="Services.php" class="order-btn">Order Now</a></td>
          </tr>
          <tr>
            <td>Passion Fruit Juice</td>
            <td>Refreshing passion fruit juice</td>
            <td>UGX:3,000</td>
            <td><a href="Services.php" class="order-btn">Order Now</a></td>
          </tr>
        </tbody>
      </table>
      <hr> 
      
      <h1 class="text-light bg-warning">Hard Drinks</h1>
      <table>
        <thead>
          <tr>
            <th>Drink</th>
            <th>Description</th>
            <th>Price</th>
            <th>Order</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Whiskey</td>
            <td>Distilled alcoholic beverage made from fermented grain mash</td>
            <td>UGX:25,000</td>
            <td><a href="Services.php" class="order-btn">Order Now</a></td>
          </tr>
          <tr>
            <td>Uganda Waragi</td>
            <td>Experience the spirit of Uganda with Uganda Waragi, a smooth and 
                potent gin distilled from the finest East African sugarcane. 
                Crafted with care, it embodies the essence of Uganda's rich 
                heritage and vibrant culture.</td>
            <td>UGX:15,000</td>
            <td><a href="Services.php" class="order-btn">Order Now</a></td>
          </tr>
          <tr>
            <td>Bell Lager</td>
            <td>Bell Lager is more than just a beer 
            refreshing taste that embodies the spirit of Uganda's social scene.
            </td>
            <td>UGX: 4,000</td>
            <td><a href="Services.php" class="order-btn">Order Now</a></td>
          </tr>
          <tr>
            <td>Bond 7 Whisky</td>
            <td>Unleash the spirit of sophistication with Bond 7 Whisky,
            smoothness and depth of character.
            </td>
            <td>UGX:20,000</td>
            <td><a href="Services.php" class="order-btn">Order Now</a></td>
          </tr>
          <tr>
            <td>Club Pilsner</td>
            <td>Elevate your drinking experience with Club Pilsner.</td>
            <td>UGX:4,500</td>
            <td><a href="Services.php" class="order-btn">Order Now</a></td>
          </tr>
       
        </tbody>
  </table>
  
</div>

<footer>
    <p>&copy; 2024 Delico's Restaurant. All rights reserved.</p>
</footer>

<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
