<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>That's How I Roll</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all">
  <script src="scripts/jquery-3.2.1.min.js"></script>
  <script src="scripts/menu-toggle.js" type="text/javascript"></script>
</head>

<body class="items">

  <?php
    include "includes/header-navigation.php";
  ?>
  <aside class="sidebar">
    <ul>
      <li><a href="menu.php">Sushi Burritos</a></li>
      <li><a href="bowls.php">Poke Bowls</a></li>
      <li><a href="rolls.php">Sushi Rolls</a></li>
      <li class="active-menu"><a href="others.php">Others</a></li>
    </ul>
  </aside>
  <main>
    <h1>Snacks</h1>
    <div class="menu-button">
      <button id="full-menu">Full Menu</button>
      <button id="vegetarian-menu">Vegetarian Menu</button>
    </div>
    <div>
      <h2>Avocado Salad $6.99<span class="v">    *Vegetarian</span></h2>
    </div>
    <div>
      <h2>Seaweed Salad $5.00<span class="v">    *Vegetarian</span></h2>
    </div>
    <div class="non-veg">
      <h2>Secret Agent Roll $8.99</h2>
      <p>
        A deep fried roll with spicy tuna and avocado, topped with spicy mayo, eel sauce, scallions and masago
      </p>
    </div>
    <div class="non-veg">
      <h2>Spicy Tuna Nachos $6.99</h2>
      <p>
        Doritos topped with spicy tuna, avocado and eel sauce
      </div>
      <div class="non-veg">
        <h2>Fire Cracker $8.99</h2>
        <p>
          Six cubes of delicious deep fried crispy rice, topped with tuna, jalapenos, eel sauce, spicy mayo and sriracha
        </p>
      </div>

      <h1>Beverages</h1>
      <div>
        <h2>Canned Soda $1</h2>
      </div>
      <div>
        <h2>Bottled Water $1</h2>
      </div>

    </main>
  </body>
  </html>
