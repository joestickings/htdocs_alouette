<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head> 
    <title><?php echo strpos($_SERVER['HTTP_USER_AGENT'], 'iP')?'Alouette': 'Alouette Flying Club - Weather'; ?></title>
    
    <meta name="description" content="About Alouette Flying Club - Weather" />
    <meta name="keywords" content="Alouette, Flying, Club, Biggin Hill, Biggin, Hill, Weather, TAF, METAR" />
    <?php include "common/page-head.php"; ?>
    <link href="css/base.css" rel="stylesheet" media="screen" type="text/css">
    <!--[if lt IE 9]>
        <link href="css/ie.css" rel="stylesheet" media="screen" type="text/css">
    <![endif]-->
    <script language="javascript" type="text/javascript" src="http://free.worldweatheronline.com/feed/weather.ashx?q=Biggin%20Hill&amp;format=json&amp;num_of_days=5&amp;key=c5f281ac06125012120208&amp;callback=var getData ="></script>
    <script type="text/javascript" language="javascript" src="js/weather.js"></script>
    
</head>


<body>


<?php $TabName = "Weather"; ?>
<?php include "common/header.php"; ?>

<div id="Content" class="clear">
    <div class="largeCol">

        <h1>Weather</h1>

        <div id="WeatherInformation"><!-- --></div>

        <h2>Useful weather links</h2>
        <ul id="WeatherLinks" class="contentList">
            
            <li>
                <img src="images/weather/timeandplace.jpg" width="255" height="186" alt="The Time and Place" class="rightImage" />
                <h3>UK Sunrise and Sunset Times</h3>
                <h4><a href="http://www.thetimeandplace.info/suntimes/uk" target="_blank">http://www.thetimeandplace.info&#8203;/suntimes/uk</a></h4>
                <p>Want to know the time of sunrise or sunset at a location? Just enter a UK postcode or UK location.</p>
                <a href="http://www.thetimeandplace.info/suntimes/uk" title="The Time and Place" target="_blank" class="button">Visit The Time and Place</a>
            </li>

            <li>
                <img src="images/weather/aviationweathercenter.jpg" width="255" height="186" alt="Aviation Weather Center" class="rightImage" />
                <h3>METAR and TAF</h3>
                <h4><a href="http://aviationweather.gov/adds/metars/" target="_blank">http://aviationweather.gov/adds/metars/</a></h4>
                <p>METARs and TAFs from the Aviation Weather Center</p>
                <a href="http://aviationweather.gov/adds/metars/" title="Aviation Weather Center" target="_blank" class="button">Visit Aviation Weather Center</a>
            </li>

            <li>
                <img src="images/links/nats.jpg" width="255" height="186" alt="NATS" class="rightImage" />
                <h3>NATS</h3>
                <h4><a href="http://www.nats-uk.ead-it.com/" target="_blank">http://www.nats-uk.ead-it.com/</a></h4>
                <p>The NATS web site provides free access to products such as: UK Aeronautical Information Publication (AIP), UK AIP Supplements (SUPs), Aeronautical Information Circulars (AICs), NOTAM and VFR Chart Newsletter &amp; Update Service.</p>
                <a href="http://www.nats-uk.ead-it.com/" title="NATs" target="_blank" class="button">Visit NATS</a>
            </li>

            <li>
                <img src="images/weather/xcweather.jpg" width="255" height="186" alt="Wind Observation Map" class="rightImage" />
                <h3>XCWeather</h3>
                <h4><a href="http://www.xcweather.co.uk/" target="_blank">http://www.xcweather.co.uk/</a></h4>
                <p>Wind observation map.</p>
                <a href="http://www.xcweather.co.uk/" title="Wind Observation Map" target="_blank" class="button">Visit XCWeather</a>
            </li>

            <li>
                <img src="images/weather/ecmwf.jpg" width="255" height="186" alt="European Centre for Medium-Range Weather Forecasts" class="rightImage" />
                <h3>European Centre for Medium-Range Weather Forecasts</h3>
                <h4><a href="http://www.ecmwf.int/" target="_blank">http://www.ecmwf.int/</a></h4>
                <p>An intergovernmental organisation supported by 34 States. They provide operational medium- and extended-range forecasts and a state-of-the-art super-computing facility for scientific research.</p>
                <a href="http://www.ecmwf.int/" title="European Centre for Medium-Range Weather Forecasts" target="_blank" class="button">Visit ecmwf.int</a>
            </li>

        </ul>

    </div>

    <div class="utilityCol smallCol">
        
        <?php include "common/trial-flights.php"; ?>
        <?php include "common/alouette-news.php"; ?>
        <?php include "common/find-us.php"; ?>

    </div>
    
</div>


<?php include "common/footer.php"; ?>


</body> 


</html>

