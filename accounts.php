<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"> 

<head> 
    <title><?php echo strpos($_SERVER['HTTP_USER_AGENT'], 'iP')?'Alouette': 'Alouette Flying Club - Accounts'; ?></title>
    
    <meta name="description" content="About Alouette Flying Club - Member's Flying Account Payment" />
    <meta name="keywords" content="Alouette, Flying, Club, Biggin Hill, Biggin, Hill, Bookings, Aircraft, Account" />
    <?php include "common/page-head.php"; ?>
    <link href="css/base.css" rel="stylesheet" media="screen" type="text/css">
    <!--[if lt IE 9]>
        <link href="css/ie.css" rel="stylesheet" media="screen" type="text/css">
    <![endif]-->
    
</head>


<body>


<?php include "common/header.php"; ?>

<div id="Content" class="clear">
    <div class="largeCol">

        <h1>Flying Accounts Payment</h1>
        
        <p>This easy-to-use feature allows you to pay for your flying using a PayPal account or Credit Card. Please take a moment to read these notes carefully before proceeding.</p>
        <p>Please note that you must have JavaScript enabled in your web browser to be able to proceed to the payPal checkout and pay for your flying online. By default web browsers generally have JavaScript enabled.</p>
        
        <p>You need to complete the form on the right of the page by entering your membership number in the box provided, then the quantity of the items used. For example if you flew 4 tacho units in G-BRAK and did one landing, type '4' in the quantity box against 'G-BRAK Tacho', then type '1' in the quantity box against 'Landing Fee'. The page will keep a running total of the costs. You will then need to click on the 'Checkout' button. This will take you to the PayPal checkout where you can enter your card details or complete the transation with your PayPal account.</p>

        <p>Note the tacho on the Warrior moves forward in increments of 1/10 of a 'tacho unit' as compared to the Cessna.</p>
        
        <p>If you get to the PayPal checkout and realise that you have made a mistake before you have completed the transation, you can either return to this page and start again, or you can update quantities on the PayPal checkout page.</p>

        <p>Ensure that you complete the payments sheet in the clubhouse as normal, marking your payment in the right hand column as 'PayPal'.</p>

        <p>Prices include a percentage to cover the PayPal fee.</p>
    
        <p>Ad-hoc payments to the club may also be made through PayPal, as long as you have a PayPal account</p>
        
        <p>The email address for ad-hoc payments is: <strong>accounts@alouette.org.uk</strong></p>
        
        <a href="https://www.paypal-marketing.co.uk/sendmoney/index.htm" target="_blank" class="button" title="Make an ad-hoc payment">Make an ad-hoc payment</a>

    </div>

    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="AccountsForm" class="smallCol formCol">
        
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="upload" value="1">
        <input type="hidden" name="undefined_quantity" value="1">
        <input type="hidden" name="business" value="accounts@alouette.org.uk">
        <input type="hidden" name="currency_code" value="GBP">
        <input type="hidden" name="return" value="http://alouette.org.uk">
        
        <fieldset class="highlightContent clear">
            <h2>Pay for your flying online</h2>
            <p class="noBottomMargin">Flying rates are applicable from 1st June 2012</p>
        </fieldset>

        <fieldset class="highlightContent clear">

            <label for="AccountsForm_MembershipNumber">Membership number</label>
            <div class="errorMessage">Please enter a valid Alouette membership number.</div>
            <input id="AccountsForm_MembershipNumber" type="text" value="" />

        </fieldset>

        <fieldset class="highlightContent clear">
            
            <table id="AccountsTable" width="100%" cellpadding="4" cellspacing="4">
                
                <colgroup>
                    <col width="57%;" valign="middle" />
                    <col width="26%;" valign="middle" />
                    <col width="17%;" valign="middle" />
                </colgroup>

                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Cost</th>
                        <th>Qty</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><label for="AccountsForm_GBRAK_Tacho">G-BRAK Tacho</label></td>
                        <td>&pound;14.50</td>
                        <td>
                            <input id="AccountsForm_GBRAK_Tacho" type="text" value="0" />
                        </td>
                    </tr>
                    <tr>
                        <td><label for="AccountsForm_GBUJO_Tacho">G-BUJO Tacho</label></td>
                        <td>&pound;1.45</td>
                        <td>
                            <input id="AccountsForm_GBUJO_Tacho" type="text" value="0" />
                        </td>
                    </tr>
                    <tr>
                        <td><label for="AccountsForm_LandingFee">Landing Fee</label></td>
                        <td>&pound;22.95</td>
                        <td>
                            <input id="AccountsForm_LandingFee" type="text" value="0" />
                        </td>
                    </tr>
                    <tr>
                        <td><label for="AccountsForm_TouchGoFee">Touch &amp; Go Fee</label></td>
                        <td>&pound;10.54</td>
                        <td>
                            <input id="AccountsForm_TouchGoFee" type="text" value="0" />
                        </td>
                    </tr>
                    <tr>
                        <td><label for="AccountsForm_DayMembership">Day Membership</label></td>
                        <td>&pound;5.17</td>
                        <td>
                            <input id="AccountsForm_DayMembership" type="text" value="0" />
                        </td>
                    </tr>
                    <tr>
                        <td><label for="AccountsForm_DayMembership">Dinghy Hire</label></td>
                        <td>&pound;10.54</td>
                        <td>
                            <input id="AccountsForm_DayMembership" type="text" value="0" />
                        </td>
                    </tr>
                </tbody>
            </table>

            <div id="ShoppingCartItems"><!-- --></div>

        </fieldset>

        <fieldset id="AccountsTotalContent" class="highlightContent clear">
            <div class="twoCol">Total</div> 
            <div class="price">&pound;0.00</div>
        </fieldset>

        <fieldset class="highlightContent textCenter clear">
            <input type="submit" class="button" name="submit" value="Checkout" />
            <img src="images/misc/payment_options.gif" width="233" height="17" alt="Payment options" />
        </fieldset>

    </form>

</div>


<?php include "common/footer.php"; ?>


</body> 


</html>

