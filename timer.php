<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>TIMER</title>

<style>
	h1{
		text-align: center;
		font-size: 40pt;
	}
	
	h2{
		text-align: center;
		font-size: 20pt;
	}
	
	.timer{
		background-color: red;
		color: white;
		text-align: center;
		font-size: 80pt;
	}
	
	.temps{
		display: flex;
		font-size: 20pt;
	}
	
	.out-temp,.in-temp{
		width: 50%;
	}
	
	.in-temp{
		text-align: right;
	}
	
	.footer{
		display: flex;
	}
	
	.left, .right{
		width: 50%;
	}
	
	.right{
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
	
<div class="page">

<div class="header">
<h1>Shenandoah Valley Baptist Church</h1>

<h2>Service Starts In:</h2>
</div>

<div class="timer">
<p id="countdown">	</p>
</div>

<div class="temps">
<div class="out-temp">
Outdoor Temp: <?php echo $_POST["out-temp"]; ?>
</div>

<div class="in-temp">
Indoor Temp: <?php echo $_POST["in-temp"]; ?>
</div>

</div>

<div class="footer">
	<div class="left">
	<p> We're Moving Forward! </p>
		</div>
	
	<div class="right">
		<p> <i>Helping people find and become passionate about Jesus</i></p>
	</div>
</div>		
		
</body>



</html>
