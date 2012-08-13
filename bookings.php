<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head> 
    <title><?php echo strpos($_SERVER['HTTP_USER_AGENT'], 'iP')?'Alouette': 'Alouette Flying Club - Bookings'; ?></title>
    
    <meta name="description" content="About Alouette Flying Club - Bookings" />
    <meta name="keywords" content="Alouette, Flying, Club, Biggin Hill, Biggin, Hill, Bookings, Aircraft, VOR" />
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

        <h1>Aircraft Bookings</h1>
        <p>Booking of our aircraft is only open to full flying members of the club. Members who have returned their forms can log in and make bookings of our aircraft via the internet.</p>
        <p>The website and booking system have been tested with Internet Explorer 7 and Firefox.</p>
        <p>Please remember it is a ‘live’ system, so do not make booking that you do not intend to honour.</p>
        
        <p>For those who are unable to book over the internet, the booking service is currently operated by Russell Dennis.</p>
        <p>Russell's number is 07703 397 534 Monday to Friday 0900-1800 or you can contact him via email at <a href="mailto:bookings@alouette.org.uk ">bookings@alouette.org.uk</a></p>
        <p><strong>There are 3 choices for members witout an internet connection</strong></p>
        <p>1) They will be able to ring up and book in the normal way and the booking will then be entered into the online system on their behalf so that other members will be aware of it.</p>
        <p>2) If they have an Alouette friend with access to the internet that friend will be able to make the bookings for them.</p>
        <p>3) They can use the internet facilities at the clubhouse to make the booking.</p>
        <p>If you have any difficulty logging in using from this website, go to the <a href="http://www.aero-vor.ch/" target="_blank"><strong>Visual Online Reservation</strong></a> site and choose the Alouette link from the bottom of that page.</p>
    
        <h2>Club Rules</h2>
        <p>The booking system does not enforce all the club rules (eg about how long in advance you can book and how many advanced bookings you can make). Club members found to be breaking the booking rules will be disciplined.</p>
        <h2>Sharing Flights</h2>
        <p>The new system allows members to say if there will be empty seats on flights. In this way, other members wanting to 'go along for the ride' will be able to find free seats and share the joy of flying.</p>
        <h2>Weekends</h2>
        <p>One of the great advantages will be looking out the window on a Saturday morning, seeing glorious weather and being able to check if the plane is free. (Of course, if the weather is bad, or the plane is booked, you should be along at the club-house helping to clean it or jawing with mates.)</p>
        <h2>Waiting</h2>
        <p>If the plane is booked for the time you want, it is possible to make a provisional booking. In this case, if the original booking is cancelled yours will become the official booking.</p>
        
        <div class="bookingSystem contentFeature clear">
            <h2>VOR Booking System Documentation</h2>
            <p>To read the documentation you will need <a href="http://www.adobe.com/products/acrobat/readstep2.html" target="_blank">Adobe Acrobat Reader</a>.</p>
            <p>Part of keeping the system secure is by the sensible use of passwords. On first use of the system, members should change their passwords. How to do this is contained in the tutorial 'Changing personal details'.</p>
            
            <ul class="twoColList noBorderList">
                <li>
                    <a href="/pdf/VOR-Using-The-Online-Booking-System.pdf" title="Complete notes" class="pdf">Complete notes</a>
                </li>
                <li>
                    <a href="/pdf/VOR-Logging-On.pdf" title="Logging on" class="pdf">Logging on</a>
                </li>
                <li>
                    <a href="/pdf/VOR-Making-a-Booking.pdf" title="Making bookings" class="pdf">Making bookings</a>
                </li>
                <li>
                    <a href="/pdf/VOR-Deleting-and-Editing-Bookings.pdf" title="Deleting and editing bookings" class="pdf">Deleting and editing bookings</a>
                </li>
                <li>
                    <a href="/pdf/VOR-Sending-Messages.pdf" title="Sending messages" class="pdf">Sending messages</a>
                </li>
                <li>
                    <a href="/pdf/VOR-Changing-Personal-Details.pdf" title="Changing personal details" class="pdf">Changing personal details</a>
                </li>
                <li>
                    <a href="/pdf/VOR-Tagging-Along.pdf" title="Tagging along" class="pdf">Tagging along</a>
                </li>
            </ul>

        </div>

    </div>

    <div class="utilityCol smallCol">
        
        <?php include "common/trial-flights.php"; ?>
        <?php include "common/alouette-news.php"; ?>
        <?php include "common/find-us.php"; ?>

    </div>
    
    <?php include "common/online-booking-login.php"; ?>


</div>


<?php include "common/footer.php"; ?>


</body> 


</html>

