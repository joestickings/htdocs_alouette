<!DOCTYPE html> 
<html lang="en"> 

<head> 
    <title><?php echo strpos($_SERVER['HTTP_USER_AGENT'], 'iP')?'Alouette': 'Alouette Flying Club - Club Grub'; ?></title>
    
    <meta name="description" content="About Alouette Flying Club - Club Grub" />
    <meta name="keywords" content="Alouette, Flying, Club, Biggin Hill, Biggin, Hill, Members, Membership, Grub, Club Grub, Social" />
    <?php include "common/page-head.php"; ?>
    <link href="css/base.css" rel="stylesheet" media="screen" type="text/css">
    <!--[if lt IE 9]>
        <link href="css/ie.css" rel="stylesheet" media="screen" type="text/css">
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
</head>


<body>


<?php include "common/header.php"; ?>

<article>
    <div class="largeCol">

        <h1>Club Grub</h1>
        <p>At Alouette we have regular hot food nights, usually once a month and on a Saturday evening, and these have proved to be very popular. Of course our well-stocked bar is also open so its a good chance for you to come along and enjoy a social evening with your friends at the club.</p>
        <p>All we ask is that you confirm your attendance in advance, by clicking on the link in the current menu section below, so that we know how many to cater for.</p>
        <p>On this page you can find information on the latest menu, the date and time of the next Club Grub night, plus details of some of previous menu's in order to whet your appetite.</p>
        
        <h2>Summer BBQ</h2>
        <p>Yes it's that time of year again and we are already planning our summer barbeque which will be in August on Saturday 18th. Booking is essential and you can buy your tickets on-line here and now.</p>
        <p>Simply select the number of tickets you want from the drop down and add the main ticket holders name into the box provided, then click on the Add to Cart button to pay via PayPal.</p>
        <p>We won't send you any tickets as these will be handed out on the night.</p>
        <p>All we need now is the weather.</p>
        <p><strong>Note:</strong> If you require a Vegetarian burger, please add the word 'Veg' after your name in the box provided plus the number required in brackets i.e. Veg (2) </p>

        <form target="_blank" method="post" action="https://www.paypal.com/cgi-bin/webscr" class="twoColForm contentFeature clear">
            <input type="hidden" value="_s-xclick" name="cmd" />
            <input type="hidden" value="MGLADQFLVXYNL" name="hosted_button_id" />

            <div class="formColsContainer clear">
                <div class="twoCol">
                    <input type="hidden" value="Number" name="on0" />
                    <label for="ClubGrubFormNumberOfTickets">Number of tickets</label>
                    <select id="ClubGrubFormNumberOfTickets" name="os0">
                        <option value="One" selected="selected">One £4.00 GBP</option>
                        <option value="Two">Two £8.00 GBP</option>
                        <option value="Three">Three £12.00 GBP</option>
                        <option value="Four">Four £16.00 GBP</option>
                        <option value="Five">Five £20.00 GBP</option>
                    </select>
                </div>

                <div class="twoCol">
                    <input type="hidden" value="Main ticket holder's name" name="on1" />
                    <label for="ClubGrubFormMainTicketHolderName">Name of main ticket holder</label>
                    <input type="text" maxlength="200" name="os1" id="ClubGrubFormMainTicketHolderName" />
                </div>
            </div>
            
            <input type="hidden" value="GBP" name="currency_code">
            <input type="submit" class="button clear" name="submit" value="Checkout">
            <img src="images/misc/payment_options.gif" width="233" height="17" alt="Payment options" class="paymentOptions" />
            <img width="1" border="0" height="1" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" alt="" />

        </form>

        <h2>Previous menu selections</h2>
        <ul id="PreviousClubGrup" class="threeColList">
            
            <li>
                <img src="images/club-grub/lemon-chicken.jpg" width="140" height="100" alt="Lemon Chicken, rice, green salad and crusty bread" class="leftImage" />
                <p>Lemon Chicken, rice, green salad and crusty bread</p>
            </li>
            <li>
                <img src="images/club-grub/chicken-honey-mustard.jpg" width="140" height="100" alt="Chicken in Honey and Mustard, BBQ ribs with a selection of salads and crusty bread" class="leftImage" />
                <p>Chicken in Honey and Mustard, BBQ ribs with a selection of salads and crusty bread</p>
            </li>
            <li>
                <img src="images/club-grub/meatballs.jpg" width="140" height="100" alt="Meatballs" class="leftImage" />
                <p>Meatballs</p>
            </li>
            <li>
                <img src="images/club-grub/curry.jpg" width="140" height="100" alt="Curry night" class="leftImage" />
                <p>Curry night</p>
            </li>
            <li>
                <img src="images/club-grub/carvery.jpg" width="140" height="100" alt="Christmas Carvery" class="leftImage" />
                <p>Christmas Carvery - Roast beef and roast pork, buffet selection, homemade crusty bread and assorted rolls and assorted desserts</p>
            </li>

        </ul>

    </div>

    <div class="utilityCol smallCol">
        
        <?php include "common/trial-flights.php"; ?>
        <?php include "common/alouette-news.php"; ?>
        <?php include "common/find-us.php"; ?>

    </div>
    
</article>


<?php include "common/footer.php"; ?>


</body> 


</html>

