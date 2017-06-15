<?php
/**
 * template name: form-page
 */

get_header(); ?>

	<div id="content-area">
    	<div class="form-wrapper">
        
        <?php echo do_shortcode('[ninja_forms id=1]'); ?>
        
        
        
        
        <!--<form method="post" action="<?php echo get_permalink(99); ?>http://outdoorfirepit.robertscreative.net/acknowledge">
        
        	<div class="order-wrapper">
            	<div class="title">
                	ORDER
                </div>
                	<select class="left" name="Fire Pit" >
                    <option class="hidden-color" value="" disabled selected hidden>Choose Fire Pit</option>
                    <option value="Classic Style 30">Classic Style 30"</option>
                    <option value="Classic Style 36">Classic Style 36"</option>
                    <option value="Wave Style 30">Wave Style 30"</option>
                    </select>
                    
                    <select class="right" name="Accessory" >
                    <option value="" disabled selected hidden>Choose Accessory</option>
                    <option value="Carbon Steel Grill Top">Carbon Steel Grill Top</option>
                    <option value="Aluminum Firepit Cover">Aluminum Firepit Cover</option>
                    </select>
                    
                    <select class="left" name="Fire Pit 2" >
                    <option class="hidden-color" value="" disabled selected hidden>Choose Another Fire Pit</option>
                    <option value="Classic Style 30">Classic Style 30"</option>
                    <option value="Classic Style 36">Classic Style 36"</option>
                    <option value="Wave Style 30">Wave Style 30"</option>
                    </select>
                    
                    <select class="right" name="Accessory 2" >
                    <option value="" disabled selected hidden>Choose Another Accessory</option>
                    <option value="Carbon Steel Grill Top">Carbon Steel Grill Top</option>
                    <option value="Aluminum Firepit Cover">Aluminum Firepit Cover</option>
                    </select>
                    
                   
                    
                      
                    
            </div>
            <div class="shipping-wrapper"> 
            	<div class="title">   
               		Contact
               	</div>
                  <input required class="left" type="text" name="-name" placeholder="Name">
                  <input required class="right" type="text" name="Email" placeholder="Email">
                  <input required class="left" type="text" name="Address" placeholder="Address">
                  <input class="right" type="text" name="Address2" placeholder="Address">
                  <input required class="left" type="text" name="State" placeholder="State">
                  <input required class="right" type="text" name="City" placeholder="City">
                  <input required class="left" type="text" name="Zip" placeholder="Zip">
                  <input required class="right" type="text" name="Phone" placeholder="Phone">
            </div>
           <!-- <div class="billing-wrapper">
            	<div class="title">
               		BILLING
               	</div>
                  <input required class="left" type="text" name="Name-On-Card" placeholder="Name On Card">
                  <input required class="right" type="text" name="Card-Type" placeholder="Card Type">
                  <input required class="left" type="text" name="Card-Number" placeholder="Card Number">
                  <input required class="right" type="text" name="Expiration-Date" placeholder="Expiration Date">
                  <input required class="right" type="text" name="CVV" placeholder="CVV">
                  <input required class="left" type="text" name="Billing-Address" placeholder="Address">
                  <input class="left" type="text" name="Billing-Address2" placeholder="Address">
                  <input required class="right" type="text" name="Billing-State" placeholder="State">
                  <input required class="left" type="text" name="Billing-City" placeholder="City">
                  <input required class="right" type="text" name="Billing-Zip" placeholder="Zip">
        	</div>-->
           <!-- <div class="comments-wrapper">
            	<div class="title">
               		COMMENTS
               	</div>
                    <textarea class="full" type="text" name="Comments"></textarea>
            </div>
            
            
            
            
            
            <div class="g-recaptcha" data-sitekey="6Lf0VBMTAAAAADOLKE14no7uZFrPil_PDqXKKMhP"></div>
            <div class="submit-wrapper">
                <input class="submit-box" type="submit" name="submit" value="SUBMIT">
            </div>
            
           
        </form>-->
                    

        </div>
	</div><!-- #content-area -->

<?php

get_footer();
