<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head> 
    <title><?php echo strpos($_SERVER['HTTP_USER_AGENT'], 'iP')?'Alouette': 'Alouette Flying Club - Aircraft'; ?></title>
    
    <meta name="description" content="About Alouette Flying Club - We have two aircraft at Alouette, one is a Cessna 172 and the other a Piper Warrior." />
    <meta name="keywords" content="Alouette, Flying, Club, Biggin Hill, Biggin, Hill, Aircraft, Aeroplane, Airplane, Cessna, Cessna 172, Piper, Warrior, Piper Warrior, PA28" />
    <?php include "common/page-head.php"; ?>
    <link href="css/base.css" rel="stylesheet" media="screen" type="text/css">
    <link href="css/photoGallery.css" rel="stylesheet" media="screen" type="text/css">
    <!--[if lt IE 9]>
        <link href="css/ie.css" rel="stylesheet" media="screen" type="text/css">
    <![endif]-->
    <script type="text/javascript" language="javascript" src="js/photoGallery.js"></script>
    
</head>


<body>


<?php $TabName = "Aircraft"; ?>
<?php include "common/header.php"; ?>

<div id="Content" class="clear">
    <div class="largeCol">

        <h1>Aircraft</h1>

        <p>We have two aircraft at Alouette, one is a Cessna 172 and the other a Piper Warrior. The aircraft are maintained to a very high standard and the hire rates are the most competitive in the South East.</p>

        <h2>Cessna 172 G-BRAK</h2>
        <ul class="aircraftGallery">
            <li><a href="images/aircraft/gallery_large_1.jpg" rel="photoGallery[gallery1]"><img src="images/aircraft/gallery_thumb_1.jpg" width="182" height="130" alt="Cessna 172 G-BRAK" class="imageBorder" /></a></li>
            <li><a href="images/aircraft/gallery_large_2.jpg" rel="photoGallery[gallery1]"><img src="images/aircraft/gallery_thumb_2.jpg" width="182" height="130" alt="Cessna 172 G-BRAK" class="imageBorder" /></a></li>
            <li><a href="images/aircraft/gallery_large_8.jpg" rel="photoGallery[gallery1]"><img src="images/aircraft/gallery_thumb_8.jpg" width="182" height="130" alt="Cessna 172 G-BRAK" class="imageBorder" /></a></li>
            <li><a href="images/aircraft/gallery_large_10.jpg" rel="photoGallery[gallery1]"><img src="images/aircraft/gallery_thumb_10.jpg" width="182" height="130" alt="Cessna 172 G-BRAK" class="imageBorder" /></a></li>
            <li><a href="images/aircraft/gallery_large_11.jpg" rel="photoGallery[gallery1]"><img src="images/aircraft/gallery_thumb_11.jpg" width="182" height="130" alt="Cessna 172 G-BRAK" class="imageBorder" /></a></li>
            <li><a href="images/aircraft/gallery_large_3.jpg" rel="photoGallery[gallery1]"><img src="images/aircraft/gallery_thumb_3.jpg" width="182" height="130" alt="Cessna 172 G-BRAK" class="imageBorder" /></a></li>
        </ul>

        <h2>Piper Warrior PA28 G-BUJO</h2>
        <ul class="aircraftGallery">
            <li><a href="images/aircraft/gallery_large_4.jpg" rel="photoGallery[gallery1]"><img src="images/aircraft/gallery_thumb_4.jpg" width="182" height="130" alt="Piper Warrior PA28 G-BUJO" class="imageBorder" /></a></li>
            <li><a href="images/aircraft/gallery_large_5.jpg" rel="photoGallery[gallery1]"><img src="images/aircraft/gallery_thumb_5.jpg" width="182" height="130" alt="Piper Warrior PA28 G-BUJO" class="imageBorder" /></a></li>
            <li><a href="images/aircraft/gallery_large_7.jpg" rel="photoGallery[gallery1]"><img src="images/aircraft/gallery_thumb_7.jpg" width="182" height="130" alt="Piper Warrior PA28 G-BUJO" class="imageBorder" /></a></li>
            <li><a href="images/aircraft/gallery_large_9.jpg" rel="photoGallery[gallery1]"><img src="images/aircraft/gallery_thumb_9.jpg" width="182" height="130" alt="Piper Warrior PA28 G-BUJO" class="imageBorder" /></a></li>
            <li><a href="images/aircraft/gallery_large_13.jpg" rel="photoGallery[gallery1]"><img src="images/aircraft/gallery_thumb_13.jpg" width="182" height="130" alt="Piper Warrior PA28 G-BUJO" class="imageBorder" /></a></li>
            <li><a href="images/aircraft/gallery_large_6.jpg" rel="photoGallery[gallery1]"><img src="images/aircraft/gallery_thumb_6.jpg" width="182" height="130" alt="Piper Warrior PA28 G-BUJO" class="imageBorder" /></a></li>
        </ul>

        <h2>Calculating the true cost</h2>
        <p>The actual cost for the aircraft is: £140 per tacho hour (including fuel, etc) + £10 for each touch and go + £22 for a full stop landing at Biggin Hill.</p>
        <p>Of course landings at other locations have to be settled with the relevant authorities.</p>
        <p>Instruction is charged at £30 per hour, from brakes off to brakes on. Flown properly and safely, the tacho time moves slower than 'real' time.</p>
        <p>Flying membership is currently £150 per year, payable on joining and from then on in April each year. All prices include VAT where appropriate. These prices were current on 1st June 2012, but may be varied at any time. Check in the clubhouse for the latest figures.</p>
        <p>For new members only, we operate a graduated fee scheme based on the month in which you join. For instance if you join in April, the full £150 will be payable but if you join in October, this will be reduced to £75.00.</p> 
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

