<!DOCTYPE html>
<html lang="en">
<head>
<style> 
	.container{
		width: 100%;
	}
	* {
		box-sizing: border-box;
	}

	input[type=text], select, textarea {
		width: 100%;
		padding: 12px;
		border: 1px solid #ccc;
		border-radius: 4px;
		resize: vertical;
	}
	
	input[type=textarea], select, textarea{
		width: 100;
		padding: 12px;
		border: 1px solid #ccc;
		border-radius: 4px;
		resize: vertical;
		}
	

	label {
		padding 12px 12px 12px 0px
		display: inline-block;
	}
		
	input[type=submit] {
		background-color: green;
		color: white;
		padding: 12px 20px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
		float: right;
	}
	
	input[type=reset]{
		padding: 12px 20px;
		border: none;
		border-radius: 4px;
		curoser: pointer;
	}


	input[type=submit]:hover {
		background-color: yellow;
	}

	.container {
		border-radius: 5px;
		background-color: #f2f2f2;
		padding: 20px;
	}
	
	.label{
		float: left;
		width: 25%;
		margin-top: 6px;
	}

	.form-group{
		float: left;
		width: 75%;
		margin-top: 6px;
	}
	
	/* Clear floats after the columns */
	.row:after {
		content: "";
		display: table;
		clear: both;
	}
	
	.buttons{
		display: flex;
		flex-direction: row-reverse;
		padding-top: 5px;
		padding-bottom: 5px;
		}
		
	
	/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each   other instead of next to each other */
@media screen and (max-width: 600px)   
	.label, .form-group, input[type=submit]{
	  width:100%;
	  margin-top:0;
  	}	

}</style>

<title>CONTACT</title>
	
<meta name="Description" content="Questions? In need of prayer or other assistance? Drop us a line and we'll be sure to get back to you as soon as we can.">

<meta name="robots" content="index, nofollow">
	
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
<link rel="shortcut icon" href="../media/favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="../css/svbcfamily.css"/>

<!-- Add Icons for hamburger menu and page close icon -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>

	<?php include('includes/header.php'); ?> 
		
	<section class="title"><h1>Contact Us</h1></section>
	
<div class="container">
	<p>Form submissions will be sent to info@svbcfamily.com. </p>
	<p>* Required
  <form id="contact-form" method="post" action="php/contact.php" role="form">
	  <div class="row">
            <div class="label">
	            <label for="form_name">First Name*</label>
            </div>
                <div class="form-group">
                    <input id="form_name" type="text" name="name" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                </div>
                    <div class="help-block with-errors"></div>
           </div>
	  
	  <div class="row">
            <div class="label">
	            <label for="form_lastname">Last Name*</label>
            </div>
                <div class="form-group">
                    <input id="form_lastname" type="text" name="surname" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
         </div>
	  
	  
	  <div class="row">
            <div class="label">
	            
	            <label for="form_email">Email*</label>
            </div>
                <div class="form-group">
                    <input id="form_email" type="email" name="email" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
	  
	  <div class="row">
            <div class="label">
	            <label for="form_need">Subject*</label>
            </div>
                <div class="form-group">
                    
                    <select id="form_need" name="need" required="required" data-error="Please specify your need.">
                        <option value=""></option>
                        <option value="Request quotation">Request information</option>
                        <option value="Request order status">Request prayer</option>
                        <option value="Other">Other</option>
                    </select>
                    
                    <div class="help-block with-errors"></div>
                    
                </div>
         </div>
	  
	  <div class="row">
            <div class="label">
	            <label for="form_message">Message*</label>
            </div>
                <div class="form-group">
                    
                    <textarea id="form_message" name="message" placeholder="Message details *" rows="4" cols="90" required="required" data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
	  </div>
	
	  <div class="row">
		  
	  <div class="buttons">
		  <div class="button-spacer"></div>
		  <div class="button-clear">
			  <input type="reset" value="RESET">
		  </div>
	  
		  <div class="button-submit">
        	  <input type="submit" class="btn btn-success btn-send" value="SUBMIT">
          </div>
	  </div>
	  </div>
  

</form>
	<br>

	<section class="contact-main">
		
		<div class="addr-physical">
			<h2>Physical Address:</h2>
			<p>4699 Valley Pike</p>
			<p>Stephens City, VA 22655</p>
		</div>
	
		<div class="addr-mail">
			<h2>Mailing Address:</h2>
			<p>PO Box 1360</p>
			<p>Stephens City, VA 22655</p>
		</div>
				
	<table class="contact-tbl">
		<tr>
			<td>Admin</td>
			<td>:</td>
			<td><a href="mailto:info@svbcfamily.com">info@svbcfamily.com</a></td>
		</tr>	
		<tr>
			<td>Pastor</td>
			<td>:</td>
			<td><a href="mailto:pastor@svbcfamily.com">pastor@svbcfamily.com</a></td>
		</tr>
		<tr>
			<td>Office</td>
			<td>:</td>
			<td><a href="tel:1-540-868-4020">540-868-4020</a></td>
		</tr>
		<tr>
			<td>Fax</td>
			<td>:</td>
			<td>540-869-4679</td>
		</tr>
	</table>
	
	</section>	

<footer>
	<?php
		include('includes/footer.php');
	?>
</footer>
	</div>

</body>
</html>