<!DOCTYPE HTML>
<html lang=en>
<head>
<title>SLIDES</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="svbcfamily.css"/>
<style>
	h1{text-align: center}
	
	h2{text-align: center}
</style>

</head>

<body>

<h1>Shenandoah Valley Baptist Church</h1>

<h2>Service Starts In:</h2>

<p id="countdown">	</p>
<script>
// Set variables from form
$date = $_GET['date'];
$time = $_GET['time'];

// Set the date we're counting down to
// Mm d, yyyy HH:MM:SS
var countDownDate = new Date("$date $time").getTime();

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


<!--update weekly slides-->
<p id="slides">
	
<iframe src="https://docs.google.com/presentation/d/e/2PACX-1vSYJkBfev5JljP9mqL6j-ncY5IKoJkjsuiNj_Y94n2YU8WqUIqENOeqAsJGFeWX_owBVomHibRvhtdn/embed?start=false&loop=true&delayms=10000" frameborder="0" width="960" height="560" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>

<div class="weather-info">
	<div class="outdoor-temp">
		<p>Outdoor Temp: <?php echo $_GET['out-temp']; ?></p>
	</div>
	<div class="indoor-temp">
		<p>Indoor Temp: <?php echo $_GET['in-temp']; ?></p>
	</div>
</div>

</body>
</html>
