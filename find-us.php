<!DOCTYPE html> 
<html lang="en"> 

<head> 
    <title><?php echo strpos($_SERVER['HTTP_USER_AGENT'], 'iP')?'Alouette': 'Alouette Flying Club - Find us'; ?></title>
    
    <meta name="description" content="About Alouette Flying Club - Weather" />
    <meta name="keywords" content="Alouette, Flying, Club, Biggin Hill, Biggin, Hill, Find Us, Map, Directions, Contact" />
    <?php include "common/page-head.php"; ?>
    <link href="css/base.css" rel="stylesheet" media="screen" type="text/css">
    <!--[if lt IE 9]>
        <link href="css/ie.css" rel="stylesheet" media="screen" type="text/css">
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
</head>


<body>


<?php $TabName = "Find us"; ?>
<?php include "common/header.php"; ?>

<article>
    <div class="largeCol">

        <h1>Find us</h1>

        <h2>Contact details</h2>
        
        <div id="ContactDetails" class="clear">
            <div class="twoCol">
                <h3>Address</h3>
                <p>Alouette Flying Club<br />Building C700<br />Churchill Way<br />Biggin Hill Airport<br />Bromley<br />Kent<br />TN16 3BN</p>
            </div>

            <div class="twoCol">
                <h3>Clubhouse</h3> 
                <p>01959 573243</p>
                
                <h3>Alan Powell (Chairman)</h3>
                <p>07910 773 493</p>
                
                <h3>E-mail:</h3>
                <p><a href="mailto:secretary@alouette.org.uk">secretary@alouette.org.uk</a></p> 
            </div>
        </div>
        
        <h2>Map</h2>
        <iframe width="98%" height="450" class="leftImage" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Alouette+Flying+Club,+Churchill+Way,+Westerham&amp;aq=1&amp;sll=51.104064,0.111772&amp;sspn=0.173753,0.441513&amp;ie=UTF8&amp;hq=Alouette+Flying+Club,+Churchill+Way,&amp;hnear=Westerham,+United+Kingdom&amp;ll=51.371352,0.046692&amp;spn=0.150028,0.377655&amp;z=11&amp;iwloc=A&amp;output=embed"></iframe>
        <a href="http://maps.google.co.uk/maps?f=q&source=embed&hl=en&geocode=&q=Alouette+Flying+Club,+Churchill+Way,+Westerham&aq=1&sll=51.104064,0.111772&sspn=0.173753,0.441513&ie=UTF8&hq=Alouette+Flying+Club,+Churchill+Way,&hnear=Westerham,+United+Kingdom&ll=51.371352,0.046692&spn=0.150028,0.377655&z=11&iwloc=A" target="_blank" title="View on Google Maps" class="button clear">View on a larger map</a>
    </div>

    <div class="utilityCol smallCol">
        
        <?php include "common/trial-flights.php"; ?>
        <?php include "common/alouette-news.php"; ?>
        <?php include "common/learning.php"; ?>

    </div>
    
</article>


<?php include "common/footer.php"; ?>


</body> 


</html>

