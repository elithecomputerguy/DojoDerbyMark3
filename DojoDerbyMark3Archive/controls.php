<?php

$command=$_GET['command'];
file_put_contents("command.txt", $command);
print "Command: ".$command."<br>";
?>

<div style="width:170; height:100; margin-left:auto; margin-right:auto;">
<table>
<tr><td><a href="controls.php?command=forwardLeft">F Left</a></td><td><a href="controls.php?command=forward">Forward</a></td><td><a href="controls.php?command=forwardRight">F Right</a></td></tr>
<tr><td><a href="controls.php?command=left">Left</a></td><td style="text-align:center;"><a href="controls.php?command=stop">Stop</a></td><td><a href="controls.php?command=right">Right</a></td></tr>
<tr><td></td><td><a href="controls.php?command=backward">Backward</a>
</td><td></td></tr>
</table>
</div>
