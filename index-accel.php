<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dojo Derby Accelerometer Control</title>

        <style>
        .coordinateDisplay{
            width: 600px;
            height: 125px;
            background-color:blanchedalmond;
        }
        .commandDisplay{
            width: 600px;
            height: 100px;
            background-color:lightblue;
        }
        </style>
        <script>

            function getAccel(){
                DeviceMotionEvent.requestPermission().then(response => {
                    if (response == 'granted') {
                    // Add a listener to get smartphone orientation 
                     // in the alpha-beta-gamma axes (units in degrees)
                     window.addEventListener('deviceorientation',(event) => {
                     // Expose each orientation angle in a more readable way
                        rotation_degrees = event.alpha;
                        frontToBack_degrees = event.beta;
                        leftToRight_degrees = event.gamma;
                
                        //Print out Coordinates
                        document.getElementById("coordinates").innerHTML = "Y Axis: " +frontToBack_degrees+"<br>X Axis: "+leftToRight_degrees+"<br>Z Axis: "+rotation_degrees;

                        //Controls Vehicle Speed
                        if(frontToBack_degrees > 80){
                            speed = " ";
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.open("GET", "./speed.php?speed=" + speed);
                            xmlhttp.send();
                        } else if (frontToBack_degrees < 80 && frontToBack_degrees > 50){
                            speed = "slow";
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.open("GET", "./speed.php?speed=" + speed);
                            xmlhttp.send();
                        } else if (frontToBack_degrees < 50 && frontToBack_degrees > 30){
                            speed = "medium";
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.open("GET", "./speed.php?speed=" + speed);
                            xmlhttp.send();
                        } else if (frontToBack_degrees < 30 && frontToBack_degrees > 10){
                            speed = "fast";
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.open("GET", "./speed.php?speed=" + speed);
                            xmlhttp.send();
                        } else if (frontToBack_degrees < 10){
                            speed = " ";
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.open("GET", "./speed.php?speed=" + speed);
                            xmlhttp.send();
                        }

                        //Controls Vehicle Direction
                        if(leftToRight_degrees > -20 && leftToRight_degrees < 20){
                            direction = "forward";
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.open("GET", "./controls.php?command=" + direction);
                            xmlhttp.send();
                        } else if (leftToRight_degrees > -50 && leftToRight_degrees < -20){
                            direction = "forwardLeft";
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.open("GET", "./controls.php?command=" + direction);
                            xmlhttp.send();
                        } else if ( leftToRight_degrees < -50){
                            direction = "left";
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.open("GET", "./controls.php?command=" + direction);
                            xmlhttp.send();
                        } else if ( leftToRight_degrees < 50 && leftToRight_degrees > 20){
                            direction = "forwardRight";
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.open("GET", "./controls.php?command=" + direction);
                            xmlhttp.send();
                        } else if ( leftToRight_degrees > 50){
                            direction = "right";
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.open("GET", "./controls.php?command=" + direction);
                            xmlhttp.send();
                        }

                        //Prints Speed and Direction to Page
                        document.getElementById("speed").innerHTML = speed;
                        document.getElementById("direction").innerHTML = direction;

            });
        }
    });
}
        </script>

    </head>
    <body>
    <h1>iOS Accelerometer Car App Javascript</h1>

        <button id="accelPermsButton"  style="height:50px;" onclick="getAccel()"><h1>Get Accelerometer Permissions</h1></button>

        <div class="coordinateDisplay">
        <p id="coordinates" style="font-size: 30px;">Axis Coordinates</p>
        </div>

        <div class="commandDisplay">
        <p id="direction" style="font-size: 30px;"></p>
        <p id="speed" style="font-size: 30px;"></p>
        </div>
    </body>
    
</html>