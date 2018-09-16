<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

date_default_timezone_set("America/New_York");
$today = getdate();

$weekday = $today[weekday];
$hours = $today[hours];

if (($weekday != "Thursday")&& ($weekday != "Friday") && ($weekday != "Saturday")
&& ($hours>="11") && ($hours<="21")){
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
      <script src="scripts/jquery-3.2.1.min.js"></script>
      <script src="scripts/googlemaps.js" type="text/javascript"></script>
    </head>
    <body id="location-page">

      <?php
       include "includes/header-navigation.php";
      ?>

      <!--Icon made by Yunjie Zhou-->
        <img class="food-truck" alt="Food truck icon" src="images/food-truck.png">
      <div  id="north-toggle-div">
        <table>
          <tr class="table-title">
            <th colspan="2"> Choose a Location! </th>
          <tr id="north-toggle">
            <th class="toggle-selected"><a href="location.php">North Campus</a></th>
            <th><a href="location2.php">Collegetown</a></th>
          </tr>
        </table>
      </div>
      <div class="maps-section">
      <div id ="north">
          <h1> North Campus </h1>
          <h2> Sunday — Wednesday: 11:00AM-9:30PM </h2>
          <h3> <?php echo($status); ?> </h3>
          <h2>500 Thurston Ave. </h2>
      </div>




        <!--code from https://www.w3schools.com/html/html_googlemaps.asp-->
        <figure class="googlemap-figure">
        <div id="googleMap"></div>
        </figure>

      <script>
        function myMap1() {
        var center1= new google.maps.LatLng(42.45364199999999, -76.48368149999999);
        var mapProp= {
          center: center1,
          zoom:18,
        };

        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

        var marker = new google.maps.Marker({
          position:center1,
          icon:"images/food-truck-mapicon.png"
        });
        marker.setMap(map);

        }
        </script>


         <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnOj1Zal2plK_twtE3gQsLsdlvNwfS7jo&callback=myMap1"></script>



      </div>
      <!-- <footer>
      <p>
      Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik
      </a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
      is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"
      title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
      </p>
      </footer> -->
    </body>
    </html>
