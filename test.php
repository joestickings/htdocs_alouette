<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"> 

<head> 
    <title><?php echo strpos($_SERVER['HTTP_USER_AGENT'], 'iP')?'Alouette': 'PayPal Code Generator'; ?></title>
    
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="noindex, nofollow">
    <?php include "common/page-head.php"; ?>
    <link href="css/base.css" rel="stylesheet" media="screen" type="text/css">
    <!--[if lt IE 9]>
        <link href="css/ie.css" rel="stylesheet" media="screen" type="text/css">
    <![endif]-->
    
</head>


<body>


<?php include "common/header.php"; ?>

<div id="Content" class="clear">
    <div class="centerMessage" style="text-align: left;">

        <h1>Test</h1>
        <p>Test page</p>
        
        
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="twoColForm contentFeature clear"> 
     
                 <input name="business" value="accounts@alouette.org.uk" type="hidden" /> 
                 <input name="return" value="http://alouette.org.uk" type="hidden" />
                 <input name="undefined_quantity" value="1" type="hidden" />
                 <input name="currency_code" value="GBP" type="hidden" />
                 <input name="cmd" value="_xclick" type="hidden" /> 
                 
                 <!-- Specify details about the item that buyers will purchase. --> 
                 <input name="item_name" value="Summer BBQ" type="hidden" /> 
                 
                 <div class="formColsContainer clear">
                    <div class="twoCol">
                        <input value="Number of tickets" name="on0" type="hidden" />
                        <label for="FieldOne">Number of tickets</label>
                        <select id="FieldOne" name="os0">
                            <option value="One" selected="selected">One Ticket - £4.00</option>
                            <option value="Two">Two Tickets - £8.00</option>
                        </select>
                    </div>

                    <div class="twoCol">
                        <input value="Main ticket holder's name" name="on1" type="hidden" />
                        <label for="FieldTwo">Main ticket holder's name</label>
                        <input name="os1" id="FieldTwo" type="text" />
                    </div>
                </div> 
                 
                 <!-- Specify the price that PayPal uses for each option. --> 
                 <input name="option_index" value="0" type="hidden"> 
                 
                 <div id="OptionSelectList">
                     <input name="option_select0" value="One ticket" type="hidden" /> 
                     <input name="option_amount0" value="4.00" type="hidden" /> 
                     <input name="option_select1" value="Two tickets" type="hidden" /> 
                     <input name="option_amount1" value="8.00" type="hidden" />
                 </div> 
                 
                 <!-- Display the payment button. --> 
                 <input class="button" name="submit" value="Checkout" type="submit" />
                 <img src="images/misc/payment_options.gif" alt="Payment options" class="paymentOptions" height="17" width="233" />
            </form>
        

    </div>

    
</div>


<?php include "common/footer.php"; ?>


</body> 


</html>

