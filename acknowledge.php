
<?php
 






  






        
        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        


if (isset($_POST['submit'])) {
    
	
	$headers = "From: Order@OutdoorFirePits.com\r\n";
	$headers .= 'Content-Type: text/plain; charset=utf-8';
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if ($email) {
   $headers .= "\r\nReply-To: $email";
}
$success = mail($to, $subject, $message, $headers, '‑fchris@robertscreative.com');
	$to = 'chris@robertscreative.com'; // Use your own email address
     $subject = 'OutdoorFirePits.com Order';
	$message = 'Name: ' . $_POST['-name'] . "\r\n\r\n";
	$message .= 'Email: ' . $_POST['Email'] . "\r\n\r\n";
	
	$message .= 'Style: ' . $_POST['Style'] . "\r\n\r\n";
	$message .= 'Size: ' . $_POST['Size'] . "\r\n\r\n";
	$message .= 'Accessory: ' . $_POST['Accessory'] . "\r\n\r\n";
	$message .= 'Accessory2: ' . $_POST['Accessory2'] . "\r\n\r\n";
	
	$message .= 'Address: ' . $_POST['Address'] . "\r\n\r\n";
	$message .= 'Address 2: ' . $_POST['Address2'] . "\r\n\r\n";
	$message .= 'State: ' . $_POST['State'] . "\r\n\r\n";
	$message .= 'City: ' . $_POST['City'] . "\r\n\r\n";
	$message .= 'Zip: ' . $_POST['Zip'] . "\r\n\r\n";
	$message .= 'Phone: ' . $_POST['Phone'] . "\r\n\r\n";
	
	/*$message .= 'Name On Card: ' . $_POST['Name-On-Card'] . "\r\n\r\n";
	$message .= 'Card Type: ' . $_POST['Card-Type'] . "\r\n\r\n";
	$message .= 'Card Number: ' . $_POST['Card-Number'] . "\r\n\r\n";
	$message .= 'Expiration Date: ' . $_POST['Expiration-Date'] . "\r\n\r\n";
	$message .= 'CVV: ' . $_POST['CVV'] . "\r\n\r\n";
	$message .= 'Billing Address: ' . $_POST['Billing-Address'] . "\r\n\r\n";
	$message .= 'Billing Address2: ' . $_POST['Billing-Address2'] . "\r\n\r\n";
	$message .= 'Billing State: ' . $_POST['Billing-State'] . "\r\n\r\n";
	$message .= 'Billing City: ' . $_POST['Billing-City'] . "\r\n\r\n";
	$message .= 'Billing Zip: ' . $_POST['Billing-Zip'] . "\r\n\r\n";*/
	
	$message .= 'Comments: ' . $_POST['Comments'];
	
	$success = mail($to, $subject, $message);
}


?>

<?php
/**
 * template name: acknowledge
 */










get_header(); ?>

	<div id="content-area">
    <div class="message-wrapper">
    
    
    
    
    
    
    
    
    
    
    <?php if(!$captcha){
          echo '<h1 class="title2">Oops!</h1>
        <p>Sorry, there was a problem sending your captcha.</p>';
          /*exit;*/
		}  
		      
		  
        
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lf0VBMTAAAAAKIsOvW5J-q8sUNHb-tDmDLUpfkH&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        if($response.success==false)
        {
          echo '<h1 class="title2">Thank You</h1>
        <p>Your order has been sent bro.</p>';
        }else
        {
          echo '<h1 class="title2">Oops!</h1>
        <p>You are spammer ! Get out !</p>';
        }
    ?>
    
   
    
    	<?php if (isset($success) && $success) { ?>
    	<h1 class="title2">Thank You</h1>
        <p>Your order has been sent.</p>
        <?php } else { ?>
        <h1 class="title2">Oops!</h1>
        <p>Sorry, there was a problem sending your order.</p>
        <?php } ?>
    </div>
	</div><!-- #content-area -->

<?php

get_footer();
