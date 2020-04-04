<!DOCTYPE html> <html lang="en"> 
<head>
	<title>DONATE</title>
	<meta name="Description" content="Page was created to allow people to voluntarily contribute to 		Shenandoah Valley Baptist Church. All contributions are made through paypal and most 
	major credit cards are accepted.">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="widthÞvice-width, initial-scale=1.0"/>
	<link rel="shortcut icon" href="../media/favicon.ico" type="image/x-icon"/> 
	<link rel="stylesheet" href="style.css"/>
	<!-- Add Icons for hamburger menu and page close icon --> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<?php include('includes/header.php'); ?>

<h1>Donations</h1>
<p>
	Thank you for your desire to donate to Shenandoah Valley Baptist Church. The church 
	relies on your faithful tithes and donations to keep the lights on.
</p>
<p>
	Paypal charges SVBC 2.9% + 30&cent for every transaction they process. If you wish to 
	help cover these fees please use the simple calculation form below to determine your 
	donation.
</p>

<p>
	To use the form simply type in your desired donation and press tab or return key. The 
	amount to cover the paypal fees will be displayed. Then click the Donate button and fill
	in the form on PayPal's website to complete your donation.
</p>

 <form name="frm-pin" method="post" action="pin-index-a.php">
        <input type="hidden" name="mode" value="PinRequest" />
        <label class="w3-text-green"><b>Desired Donation</b></label>
        <input type="text" id="num1" onchange="calculateAmount(this.value)" required>
        
        <label><b>Requested Donation</b></label>
        <input class="w3-input w3-border" name="tot_amount" id="tot_amount" type="text" readonly>
        <script>
            function calculateAmount(val) {
                var initial_donation = val * 1.029 + .3;
                var final_donation = money_round(initial_donation)
                /*display the result*/
                var divobj = document.getElementById('tot_amount');
                divobj.value = final_donation
            }
        </script>
</form>
<br>
<br>

<!-- Paypal Buttons (do NOT edit)-->
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick" />
<input type="hidden" name="hosted_button_id" value="Z9YHRQ3EDDG5A" />
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
</form>



<script>

function calculate()
{
	var donation=document.getElementById("num1").value;
	var field2=1.029
	
	var result=parseFloat(donation)*parseFloat(field2)+.3;
	
	if(!isNaN(result))
	{
		result=money_round(result);
		document.getElementById("result").innerHTML="Encouraged Donation: $"+result;
		
	}
}

function money_round(result)
{
	return Math.ceil(result * 100) / 100;
}

</script>
</body>
</html>