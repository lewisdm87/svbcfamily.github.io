<!DOCTYPE HTML>
<html lang=en>
<head>
<title>SLIDES</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="svbcfamily.css"/>
<style>
	h1{
		text-align: center;
		font-size: larger;
	}
	
	h2{
		text-align: center;
		font-size: large;
	}
	
	.timer{
		text-align: center;
		font-size: xx-large;
	}
	
	.slides{
		text-align: center
	}
	
	.temps{
		display: flex;
		padding-left: 1em;
		padding-right: 1em;
		font-size: 20pt;
	}
	
	.out-temp,.in-temp{
		width: 50%;
	}
	
	.in-temp{
		text-align: right;
	}
	
	

</style>

<script>
// Set date and time to countdown to
// date/time vars come from weekly.html

var date = "<?php echo $_POST["date"]; ?>";
var time = "<?php echo $_POST["time"]; ?>";
var dts = date + " " + time;

var countDownDate = new Date(dts).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    
     // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    
    // Pad variables with leading zeros
    Number.prototype.pad = function(size) {
    var s = String(this);
    while (s.length < (size || 2)) {s = "0" + s;}
    return s;
    }
    
    days = (days).pad(2);
    hours = (hours).pad(2);
    minutes = (minutes).pad(2);
    seconds = (seconds).pad(2);
    
    // Output the result in an element with id="countdown"
    // Drop expired elements
     document.getElementById("countdown").innerHTML = days + ": " + hours + ": "
    + minutes + ": " + seconds;
    
    // Drop variables less than zero
    if (days <= 0) {
        document.getElementById("countdown").innerHTML = hours + ": " + minutes + ": " + seconds;
    }
    
    if (hours <= 0) {
        document.getElementById("countdown").innerHTML = minutes + ": " + seconds;
    }
    
    if (minutes <= 0) {
        document.getElementById("countdown").innerHTML = seconds;
    }
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "NOW";
    }
}, 1000);
</script>

</head>

<body>

<h1>Shenandoah Valley Baptist Church</h1>

<h2>Service Starts In:</h2>

<!-- Page starts here! -->
<div class="timer">
<h1 id="countdown">	</h1>
</div>


<!--update weekly slides    w=950, h=520-->
<div class="slides">

<iframe src="https://docs.google.com/presentation/d/e/2PACX-1vSjh2a8NTKAVD9pXY2laPgS6sZRmh6kjfy3-ZtO5D0ohnB3loM6SCirBgp8HWmSMb3zLvTbpQunB0Jz/embed?start=false&loop=true&delayms=10000" frameborder="0" width="950" height="520" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>

</div>

<div class="temps">
<div class="out-temp">
Outdoor Temp: <?php echo $_POST["out-temp"]; ?>
</div>

<div class="in-temp">
Indoor Temp: <?php echo $_POST["in-temp"]; ?>
</div>

</div>

</body>
</html>
