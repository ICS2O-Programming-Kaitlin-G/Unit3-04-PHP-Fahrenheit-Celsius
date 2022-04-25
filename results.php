<?php
  $fahrenheit = $_POST["fahrenheit"];
  $celsius = (5/9) * ($fahrenheit - 32);
?>
<h5>The fahrenheit has been converted successfully into Celsius and will now be displayed in this section.</h5>
<?php echo "the temperature unit Fahrenheit that was provided converted into the temperature unit Celsius, rounded to two decimal places, is " . round($celsius, 2) . " cm<sup>°</sup>" ?>