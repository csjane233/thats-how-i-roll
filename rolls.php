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
      <li class="active-menu"><a href="rolls.php">Sushi Rolls</a></li>
      <li><a href="others.php">Others</a></li>
    </ul>
  </aside>

  <main>
    <h1>Maki and Hand Rolls</h1>
    <div class="menu-button">
      <button id="full-menu">Full Menu</button>
      <button id="vegetarian-menu">Vegetarian Menu</button>
    </div>

    <div>
        <h2 class="non-veg">California Roll $4</h2>
        <h2>Avocado Roll $3<span class="v">    *Vegetarian</span></h2>
        <h2>Sweet Potato Roll $4<span class="v">    *Vegetarian</span></h2>
        <h2 class="non-veg">Salmon Roll $4</h2>
        <h2 class="non-veg">Tuna Avocado Roll $5</h2>
        <h2 class="non-veg">Spicy Tuna Roll $6</h2>
        <h2 class="non-veg">Alaska Roll $6</h2>
        <h2 class="non-veg">Shrimp Tempura Roll $6</h2>
        <h2>Cucumber Roll $3<span class="v">    *Vegetarian</span></h2>
        <h2>Vegetable Roll $4<span class="v">    *Vegetarian</span></h2>
        <h2 class="non-veg">Tuna Roll $4</h2>
        <h2 class="non-veg">Kani Roll $4</h2>
        <h2 class="non-veg">Salmon Avocado Roll $5</h2>
        <h2 class="non-veg">Spicy Salmon Roll $6</h2>
        <h2 class="non-veg">Philly Roll $6</h2>
        <h2 class="non-veg">Spicy Scallops Roll $6</h2>
    </div>

  </main>

</body>
</html>
