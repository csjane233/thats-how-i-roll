  <?php
  error_reporting(E_ERROR | E_WARNING | E_PARSE);

  date_default_timezone_set("America/New_York");
  $today = getdate();

  $weekday = $today[weekday];
  $hours = $today[hours];

  if (($weekday != "Sunday")&& ($weekday != "Monday") && ($weekday != "Tuesday")
  && ($weekday != "Wednesday") && (($hours>="17") || ($hours<="2"))){
      $status = "(We're Open Now!)";
  }
  else{
      $status = "(We're Closed Now!)";
  }
  ?>


    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="UTF-8">
      <title>That's How I Roll</title>
      <link rel="stylesheet" type="text/css" href="styles/all.css" media="all">
    </head>
    <body id="location-page">

      <?php
       include "includes/header-navigation.php";
      ?>

      <!--Icon made by Yunjie Zhou-->
          <img class="food-truck" alt="Food truck icon" src="images/food-truck.png">

          <div id="ctown-toggle-div">
            <table>
              <tr class="table-title">
                <th colspan="2"> Choose a Location! </th>
                <tr id="ctown-toggle">
                  <th><a href="location.php">North Campus</a></th>
                  <th class="toggle-selected"><a href="location2.php">Collegetown</a></th>
              </tr>
            </table>
          </div>

          <div class="maps-section">
            <div id = "ctown">
              <h1> Collegetown </h1>
              <h2> Thursday — Saturday: 4:30 PM-2:00AM </h2>
              <h3> <?php echo($status); ?> </h3>
              <h2>215 College Ave. </h2>
            </div>


          <figure class="googlemap-figure">
          <div id="googleMap-2"></div>
          </figure>

        <script>
          function myMap2() {
          var center2= new google.maps.LatLng(42.440108,-76.484669);
          var mapProp2= {
            center: center2,
            zoom:18,
          };

          var map2=new google.maps.Map(document.getElementById("googleMap-2"),mapProp2);

          var marker2 = new google.maps.Marker({
            position:center2,
            icon:"images/food-truck-mapicon.png"
          });
          marker2.setMap(map2);

          }
          </script>


        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgVg_TPIgB5fosTp1KJo3ss4nXqlQ7bEs&callback=myMap2"></script>
        </div>
    </body>
    </html>
