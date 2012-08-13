<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"> 

<head> 
    <title><?php echo strpos($_SERVER['HTTP_USER_AGENT'], 'iP')?'Alouette': 'Alouette Flying Club - Video diary'; ?></title>
    
    <meta name="description" content="About Alouette Flying Club - Video diary" />
    <meta name="keywords" content="Alouette, Flying, Club, Biggin Hill, Biggin, Hill, Video, Diary, Members, Member, Audio, Picture" />
    <?php include "common/page-head.php"; ?>
    <link href="css/base.css" rel="stylesheet" media="screen" type="text/css">
    <link href="css/photoGallery.css" rel="stylesheet" media="screen" type="text/css">
    <!--[if lt IE 9]>
        <link href="css/ie.css" rel="stylesheet" media="screen" type="text/css">
    <![endif]-->
    <script type="text/javascript" language="javascript" src="js/photoGallery.js"></script>
    
</head>


<body>


<?php include "common/header.php"; ?>

<div id="Content" class="clear">
    <div class="largeCol">

        <h1>Video diary</h1>
        <p>Want to know what it is like to fly one of our aircraft? This page shows some videos provided by our members in our Cessna 172 and Piper Warrior PA28 aircraft.</p>

        <ul class="contentList">
            
            <li>
                <a href="http://www.youtube.com/watch?v=qgwhYz6pWBY" rel="videoDiary" title="Biggin Hill to Ostend"><img src="images/video-diary/bigginhill-ostend.jpg" width="255" height="186" alt="Biggin Hill to Ostend" class="rightImage" /></a>
                <h2>Biggin Hill to Ostend</h2>
                <p>A flight in the Piper Warrior G-BUJO from Biggin Hill to Ostend - and back at night.</p>
                <p>Thanks to pilot Stefan Szaniszlo for providing this.</p>
                <a href="http://www.youtube.com/watch?v=qgwhYz6pWBY" rel="videoDiary" class="button clear" title="Biggin Hill to Ostend">&#9654;&nbsp;&nbsp;Play video</a>
            </li>

            <li>
                <a href="http://www.youtube.com/watch?v=WD4sBcxaaZ0" rel="videoDiary" title="Biggin Hill Circuit"><img src="images/video-diary/bigginhill-circuits.jpg" width="255" height="186" alt="Biggin Hill Circuit" class="rightImage" /></a>
                <h2>Biggin Hill Circuit</h2>
                <p>A video from Alouette student Robbie Garrett showing startup, take-off and practice circuits in the Cessna 172 G-BRAK on a sunny evening at Biggin Hill.</p>
                <a href="http://www.youtube.com/watch?v=WD4sBcxaaZ0" rel="videoDiary" class="button clear" title="Biggin Hill Circuit">&#9654;&nbsp;&nbsp;Play video</a>
            </li>

            <li>
                <a href="http://www.youtube.com/watch?v=6-VLGKrRzOY" rel="videoDiary" title="Transiting over London Gatwick"><img src="images/video-diary/transit-over-gatwick.jpg" width="255" height="186" alt="Transiting over London Gatwick" class="rightImage" /></a>
                <h2>Transiting over London Gatwick</h2>
                <p>A very good video of recently qualified member Tom Wheeler transiting over London Gatwick in our Cessna 172 G-BRAK.</p>
                <a href="http://www.youtube.com/watch?v=6-VLGKrRzOY" rel="videoDiary" class="button clear" title="Transiting over London Gatwick">&#9654;&nbsp;&nbsp;Play video</a>
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

