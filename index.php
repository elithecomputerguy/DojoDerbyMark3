<h1>WiFi Car App</h1>

<?php
$ip = $_SERVER['SERVER_ADDR'];

echo "<div style='width:640; height:480; margin-left:auto; margin-right:auto;'>";
echo "<iframe src='http://".$ip.":8000' height=480 width=640></iframe>";
echo "</div>";
echo "<br>";
echo "<div style='width:250; height:100; margin-left:auto; margin-right:auto;'>";
echo "<iframe src='controls.php' height=100 width=250></iframe>";
echo "</div>";
echo "<br>";
echo "<div style='width:175; height:60; margin-left:auto; margin-right:auto;'>";
echo "<iframe src='speed.php' height=60 width=175></iframe>";
echo "</div>";

?>