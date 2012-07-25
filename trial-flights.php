<!DOCTYPE html> 
<html lang="en"> 

<head> 
    <title><?php echo strpos($_SERVER['HTTP_USER_AGENT'], 'iP')?'Alouette': 'Alouette Flying Club - Trial Flights'; ?></title>
    
    <meta name="description" content="About Alouette Flying Club - Trial lessons are of one hour duration with a qualified instructor and the recipient will spend most of this time at the controls of the aircraft." />
    <meta name="keywords" content="Alouette, Flying, Club, Biggin Hill, Biggin, Hill, Trial Flights, Flight, Cesnna, Piper, C172, PA28, Trial Lesson, Trial, Lesson" />
    <?php include "common/page-head.php"; ?>
    <link href="css/base.css" rel="stylesheet" media="screen" type="text/css">
    <!--[if lt IE 9]>
        <link href="css/ie.css" rel="stylesheet" media="screen" type="text/css">
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
</head>


<body>


<?php $TabName = "Trial flights"; ?>
<?php include "common/header.php"; ?>

<article>
    <div class="largeCol">

        <h1>Trial flights</h1>
        
        <h2>Book now with PayPal - &pound;165 inclusive</h2>

        <p>Trial lessons are of one hour duration with a qualified instructor and the recipient will spend most of this time at the controls of the aircraft. The flight will be from Biggin Hill and will return to Biggin Hill.   If the recipient subsequently decides to work towards qualifying for the Private Pilot’s Licence, this first lesson counts towards the flying hours required and can be entered in their Pilot’s log book - see below for our special offer to new students.</p>
        <img src="images/trial-flights/hero.jpg" width="590" height="320" alt="Trial flights with Alouette" class="heroImage" />
        <p>Vouchers are valid at the price sold for a period of three months. Thereafter the club reserves the right to make a surcharge if our costs, notably that of fuel, increase significantly.  It is not necessary to book the date and time of the trial lesson when purchasing a voucher.</p>
        <p>If you book a trial lesson using PayPal we will be in touch shortly after by email to confirm your booking and discuss a suitable date/time for the flight. If you wish we can contact you by telephone but you will need to type your number, and any other relevant information, into the 'Add Special Instructions for the Merchant' link as PayPal's security policy prevent them from disclosing your number to us.</p>
        <p>If you prefer to discuss your trial lesson first, please contact <strong>Russell Dennis</strong> on <strong>07703 397 534</strong> Monday to Friday 0900-1800 or email him via <a href="mailto:bookings@alouette.org.uk">bookings@alouette.org.uk</a></p>
        <p>Alternatively, trial lessons can be given without buying vouchers. Bookings can be taken and the costs paid on the day, cash only please. For trial lessons paid for without vouchers, please contact Russell Dennis as above.</p>
        <p>Following your trial lesson we hope you will want to continue with your training and to this end we offer a special pack containing the initial items you will require to start your training. These contain the following;</p>
        <ul>
            <li>Aircraft Check List</li>
            <li>Aircraft Handling Notes</li>
            <li>Pilot's Log Book</li>
        </ul>
        <p>These packs are intended for new students only, are offered at the preferential price of <strong>£15.00</strong> each and are available from your instructor.</p>
    </div>

    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="TrialLessonForm" class="formCol smallCol">
        
        <input name="cmd" value="_s-xclick" type="hidden" />
        <input name="hosted_button_id" value="87K7DYG674NUW" type="hidden" />
        
        <fieldset class="highlightContent clear">
            <h2>Book a trial flight</h2>
            <p class="noBottomMargin">You can book a trial flight in our aircraft below, please make sure you fill in the Student's name in the box provided before clicking on the 'Checkout' button. Don't worry if you are paying for this flight as a present, we will contact you about the flight and not the student you name.</p>
        </fieldset>

        <fieldset class="highlightContent clear">
            
            <input name="on0" value="Number of Lessons" type="hidden" />
            <label for="TrialLessonForm_NumberOfLessons">Number of lessons</label>
            <select id="TrialLessonForm_NumberOfLessons" name="os0">
                <option value="1 Lesson" selected="selected">1 lesson £165.00</option>
                <option value="2 Lessons">2 lessons £330.00</option>
            </select>

        </fieldset>

        <fieldset class="highlightContent clear">
            
            <input name="on1" value="Student Name(s)" type="hidden" />
            <label for="TrialLessonForm_StudentName">Student name(s)</label>
            <div class="errorMessage">Please enter student name(s) in the box below.</div>
            <input type="text" id="TrialLessonForm_StudentName" name="os1" value="" />

        </fieldset>

        <fieldset class="highlightContent clear">
            Cessna 172 or Piper PA28 Trial Lesson
        </fieldset>

        <fieldset class="highlightContent clear">
            <div class="twoCol">Total <div class="smallText">(inclusive)</div></div> 
            <div class="price">&pound;165.00</div>
        </fieldset>

        <fieldset class="highlightContent textCenter clear">
            <input type="hidden" value="GBP" name="currency_code" />
            <input type="submit" class="button" name="submit" value="Checkout">
            <img src="images/misc/payment_options.gif" width="233" height="17" alt="Payment options" />
            <img width="1" border="0" height="1" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" alt="" />
        </fieldset>



    </form>
    
</article>


<?php include "common/footer.php"; ?>


</body> 


</html>

