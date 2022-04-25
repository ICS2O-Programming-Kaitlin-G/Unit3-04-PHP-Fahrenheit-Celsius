<!DOCTYPE html>
<!-- ICS2O-Unit3-04-PHP-FahrenheitCelsius -->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This website contains the mathematic formula to convert the temperature measurement unit Fahrenheit into the temperature measurement unit Celsius, condensed into a digital computation device.">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Katie G">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"> 
    <title>Digital computation device specializing in the conversion of the temperature measurement unit Fahrenheit to the temperature measurement unit Celsius.</title>
 
    <!-- These lines of code permit the visualization of the favicon, an element commonly employed in the creation of a website.  -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
  </head>
<body>
  <!-- This function will employ the use of the "echo" function in order to display a header for the page. -->
  <?php 
    echo "<h1>Digital computation device specializing in the conversion of the temperature measurement unit Fahrenheit to the temperature measurement unit Celsius.</h1>";
  ?>

  <!-- This function creates a form which will gather information from the user through the utilization of a text field. -->
  <form action="./results.php" method="post" target="calculated-temperature">
    <label for="fahrenheit">Please input the precise temperature in Fahrenheit.</label>
    <input type="number" id="fahrenheit" placeholder="Please input the precise temperature in Fahrenheit." name="fahrenheit">
    <br>
    <br>
    <input type="submit" value="Please press this button to initiate the process.">
    <br>
    <br>
  </form>

  <!-- This function will display the results of the calculation completed by the secondary -->
  <iframe id="calculated-temperature" name="calculated-temperature">
    Wow! the volume will now be shared :) " + $volume + cm<sup>3</sup>"
  </iframe>
</body>
</html>