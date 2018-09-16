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
        <li class="active-menu"><a href="menu.php">Sushi Burritos</a></li>
        <li><a href="bowls.php">Poke Bowls</a></li>
        <li><a href="rolls.php">Sushi Rolls</a></li>
        <li><a href="others.php">Others</a></li>
      </ul>
  </aside>

  <main>
    <div class="menu-title">
      <h1>Sushi Burritos</h1>
    </div>
    <div class="menu-button">
      <button id="full-menu">Full Menu</button>
      <button id="vegetarian-menu">Vegetarian Menu</button>
    </div>

    <div class="non-veg">
      <h2>Spicy Tuna Lover $9.99</h2>
      <p>
        Spicy tuna, shrimp tempura, avocado, cucumber, kani and spicy mayo
      </p>
    </div>
    <div>
        <h2>I Left My Fish In San Fran $8.99 <span class="v">    *Vegetarian</span></h2>
      <p>
        Tempura asparagus, avocado, oshinko, lettuce and seaweed salad
      </p>
    </div>
    <div class="non-veg">
      <h2>Three Amigos $9.99</h2>
      <p>
        Fresh tuna, avocado, cucumber, oshinko, salad, masago, scallion, tempura flakes and yuzu sauce
      </p>
    </div>
    <div class="non-veg">
      <h2>Salmon Yuzu $9.99</h2>
      <p>
        Salmon, oshinko, avocado, kani, salad, cucumber, masago, scallion, tempura flakes and yuzu sauce
      </p>
    </div>
    <div class="non-veg">
      <h2>Scorpion King $9.99</h2>
      <p>
        Soft shell crab, cucumber, kani, yamagobo and eel sauce
      </p>
    </div>
    <div class="non-veg">
      <h2>Out Of Control $9.99</h2>
      <p>
        Spicy salmon, shrimp tempura, avocado, cucumber, kani and spicy mayo
      </p>
    </div>
    <div>
      <h2>Buddha Belly $8.99<span class="v">    *Vegetarian</span></h2>
      <p>
        Tofu, asparagus, cucumber, avocado, tempura flakes and spicy mayo
      </p>
    </div>
    <div class="non-veg">
      <h2>Sumo $9.99</h2>
      <p>
        Salmon, spicy tuna, cream cheese, avocado, lettuce, tempura flakes and eel sauce
      </p>
    </div>

  </main>
  </body>
  </html>
