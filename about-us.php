<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head> 
    <title><?php echo strpos($_SERVER['HTTP_USER_AGENT'], 'iP')?'Alouette': 'Alouette Flying Club - About us'; ?></title>
    
    <meta name="description" content="About Alouette Flying Club - Alouette is, first and foremost, a club which is run for the members, by the members. We have no employees which keeps our overheads low and allows us to keep the cost of flying down, an all-important consideration in these days of rising prices." />
    <meta name="keywords" content="Alouette, Flying, Club, Biggin Hill, Biggin, Hill, About, Us, About us, More information, information, more" />
    <?php include "common/page-head.php"; ?>
    <link href="css/base.css" rel="stylesheet" media="screen" type="text/css">
    <!--[if lt IE 9]>
        <link href="css/ie.css" rel="stylesheet" media="screen" type="text/css">
    <![endif]-->
    
</head>


<body>


<?php $TabName = "About us"; ?>
<?php include "common/header.php"; ?>

<div id="Content" class="clear">
    <div class="largeCol">

        <h1>About us</h1>
        <p>Alouette is, first and foremost, a club which is run for the members, by the members. We have no employees which keeps our overheads low and allows us to keep the cost of flying down, an all-important consideration in these days of rising prices. Our flying rates are still among the cheapest in the South East of England!</p>
        <img src="images/about-us/hero_sign.jpg" width="590" height="320" alt="About Alouette" class="heroImage" />
        <p>You can join Alouette as a social member, a student or as a qualified pilot but whatever level you choose, you can be sure of a very warm welcome.</p>        
        <p>Our members range in age from early teens to - well let's just say 'mature'. Some have been flying for many years, others are newly qualified. But they all have one thing in common - they love flying.</p>
        <img src="images/about-us/social.jpg" width="255" height="186" alt="Alouette club grub evening" class="rightImage"/>
        <p>We have a very active social side to the club and have a bar in the club house which is often open. In the summer we organise a barbeque and once a month we have a food evening on a Saturday night. Also, on the first Wednesday of every month, we have a club night.</p>
        <p>We also arrange fly-away's and both flying and non-flying members are welcome to come along to these.</p>
        <p>We now accept PayPal for payment of trial flights and member's flying accounts to make life even easier!</p>
        <p>Alouette brings together people from all walks of life who not only love flying but who also want to fly cheaply and, above all, safely.</p>
        <p>We have a range of highly qualified and experienced instructors and can provide training on most days of the week, and at weekends. We love to welcome like-minded folk who wish to participate in the running of the club, as well as enjoy their flying.</p>
        <img src="images/misc/aopa.gif" width="74" height="60" alt="Alouette is a corporate member of AOPA" class="rightImage"/>
        <p>Alouette is a corporate member of AOPA, the Aircraft Owners and Pilots Association, so you can be assured of high quality flight training and value for money.</p>
        <p>We hope you will join us - why not try a <a href="/trial-flights" title="Alouette trial flights">trial lesson</a>?</p>
        <p>For more information, email <a href="mailto:secretary@alouette.org.uk">secretary@alouette.org.uk</a></p>
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

