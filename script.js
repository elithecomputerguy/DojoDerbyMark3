window.onload = function() {
    document.getElementById("kinput").focus();
  };

kinput.onkeydown = handle;

speed = " ";
direction = " ";

function handle(e) {

    if(e.code == "Numpad8"){
        direction = "forward";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "./controls.php?command=" + direction);
        xmlhttp.send();
    }

    if(e.code == "Numpad7"){
        direction = "forwardLeft";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "./controls.php?command=" + direction);
        xmlhttp.send();
    }

    if(e.code == "Numpad9"){
        direction = "forwardRight";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "./controls.php?command=" + direction);
        xmlhttp.send();
    }

    if(e.code == "Numpad4"){
        direction = "left";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "./controls.php?command=" + direction);
        xmlhttp.send();
    }

    if(e.code == "Numpad5"){
        direction = "stop";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "./controls.php?command=" + direction);
        xmlhttp.send();
    }

    if(e.code == "Numpad6"){
        direction = "right";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "./controls.php?command=" + direction);
        xmlhttp.send();
    }

    if(e.code == "Numpad2"){
        direction = "backward";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "./controls.php?command=" + direction);
        xmlhttp.send();
    }

    if(e.code == "Digit1"){
        speed = "slow";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "./speed.php?speed=" + speed);
        xmlhttp.send();
    }

    if(e.code == "Digit2"){
        speed = "medium";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "./speed.php?speed=" + speed);
        xmlhttp.send();
    }

    if(e.code == "Digit3"){
        speed = "fast";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "./speed.php?speed=" + speed);
        xmlhttp.send();
    }


        
        document.getElementById("speed").innerHTML = speed;
        document.getElementById("direction").innerHTML = direction;

        



        kinput.value = " ";  
        kinput.value = e.code;

    }

