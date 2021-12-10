<h1>WiFi Car App Javascript</h1>

<?php
$ip = $_SERVER['SERVER_ADDR'];

echo "<div style='width:640; height:480; margin-left:auto; margin-right:auto;'>";
echo "<iframe src='http://".$ip.":8000' height=480 width=640></iframe>";
echo "</div>";
echo "<br>";

?>
<div style='width:200px; margin-left:auto; margin-right:auto;'>
    <p>Command (Use NumPad)</p>
<form id="form" onsubmit="return false">
<input type="text" placeholder="Press command keys here" id="kinput">
</form>
<p>Speed: <span id="speed"></span></p>
<p>Direction: <span id="direction"></span></p>
</div>
  
<script src="script.js"></script>