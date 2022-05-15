<?php

$speed=$_GET['speed'];
file_put_contents("speed.txt", $speed);
print "Speed: ".$speed."<br>";
?>

<a href="speed.php?speed=slow">Slow</a>
<a href="speed.php?speed=medium">Medium</a>
<a href="speed.php?speed=fast">Fast</a>

