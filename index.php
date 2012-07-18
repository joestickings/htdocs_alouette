<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<title><?php echo strpos($_SERVER['HTTP_USER_AGENT'], 'iP')?'Alouette': 'Alouette Flying Club - Based at Biggin Hill - We put the fun back into flying'; ?></title>
	
	<meta name="description" content="Alouette Flying Club - We put the fun back into flying - Based at Biggin Hill, Alouette is a flying club run by the members for the members offering PPL training." />
	<meta name="keywords" content="Alouette, Flying, Club, Biggin Hill, Biggin, Hill, Student, Pilot, Members, Kent, Cessna, Piper, Training, PPL" />
	<?php include "common/page-head.php"; ?>
    <link href="css/base.css" rel="stylesheet" media="screen" type="text/css">
    <script type="text/javascript" language="javascript" src="js/jquery.cross-slide.min.js"></script>
    
</head>


<body>


<?php $TabName = "Home"; ?>
<?php include "common/header.php"; ?>

<article>
	<div class="mainFeature clear">
            <div id="HomeMainFeatureImages" class="mainFeatureImages">
                <!-- -->
            </div>

            <div class="mainFeatureContent">
                <h1>Alouette Flying Club</h1>
                <h2>We put the fun back into flying</h2>
                <p>Alouette is, first and foremost, a club which is run for the members, by the members. We have no employees which keeps our overheads low and allows us to keep the cost of flying down, an all-important consideration in these days of rising prices. Our flying rates are still among the cheapest in the South East of England!</p>
                <a href="/About-us" class="button clear" title="More about Alouette">More about Alouette</a>
            </div>
    </div>

    
        <div class="largeCol">

            <div class="teaserBox clear">

                <a href="/Trial-flights" title="Trial flights with Alouette" class="teaserImage">
                    <img src="images/home/trial_flights.jpg" width="255" height="186" alt="Trial flights with Alouette" />
                </a>

                <div class="teaserContent">
                    <h2>Trial flights</h2>
                    <p>Trial lessons are of one hour duration with a qualified instructor and the recipient will spend most of this time at the controls of the aircraft. The flight will be from Biggin Hill and will return to Biggin Hill.</p>
                    <a href="/Trial-flights" class="button clear" title="More about trial flights">More about trial flights</a>
                </div>
            
            </div>

            <div class="teaserBox last clear">

                <a href="/Alouette-news" title="The latest Alouette news" class="teaserImage">
                    <img src="images/home/members.jpg" width="255" height="186" alt="The latest Alouette news" />
                </a>

                <div class="teaserContent">
                    <h2>Alouette news</h2>
                    <p>Want to find out what is going on at the club? You can view video diaries from Alouette pilots aswell as details about social events, club grub nights and other important club information on our ‘latest news’ page.</p>
                    <a href="/Alouette-news" class="button clear" title="View the latest Alouette news">View the latest Alouette news</a>
                </div>
            
            </div>
        
        </div>

        <div class="smallCol">
            <div id="WeatherInfo">
                <h2>Biggin Hill Weather</h2>
                <div id="BBCWeather">
                    <iframe src="http://news.bbc.co.uk/weather/forecast/2098/Next3DaysEmbed.xhtml?target=_parent" allowTransparency="true" width="306" height="435" frameborder="0"></iframe>
                </div>
            </div>
        </div>


    
    <?php include "common/online-booking-login.php"; ?>


</article>


<?php include "common/footer.php"; ?>


</body> 


</html>

