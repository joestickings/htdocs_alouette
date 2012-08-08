<!DOCTYPE html> 
<html lang="en"> 

<head> 
    <title><?php echo strpos($_SERVER['HTTP_USER_AGENT'], 'iP')?'Alouette': 'Alouette Flying Club - The Committee'; ?></title>
    
    <meta name="description" content="About Alouette Flying Club - Learning to fly" />
    <meta name="keywords" content="Alouette, Flying, Club, Biggin Hill, Biggin, Hill, The Committee, Committee" />
    <?php include "common/page-head.php"; ?>
    <link href="css/base.css" rel="stylesheet" media="screen" type="text/css">
    <!--[if lt IE 9]>
        <link href="css/ie.css" rel="stylesheet" media="screen" type="text/css">
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
</head>


<body>


<?php $TabName = "The Committee"; ?>
<?php include "common/header.php"; ?>

<article>
    <div class="largeCol">

        <h1>The Committee</h1>
        
        <p>Below is the current 2012/2013 Alouette committee, as voted for at the last AGM.</p>
        
        <ul class="twoColList">
            <li> 
                <img width="255" height="186" alt="Placeholder committee member image" src="images/committee/placeholder.jpg" class="leftImage" />
                <h2>Trevor Williams</h2>
                <p>Club President</p>                
            </li>
            <li> 
                <img width="255" height="186" alt="Placeholder committee member image" src="images/committee/placeholder.jpg" class="leftImage" />
                <h2>Alan Powell</h2>
                <p>Club Chairman</p>                
            </li>
            <li> 
                <img width="255" height="186" alt="Placeholder committee member image" src="images/committee/placeholder.jpg" class="leftImage" />
                <h2>Peter Thomson</h2>
                <p>Club Secretary</p>                
            </li>
            <li> 
                <img width="255" height="186" alt="Placeholder committee member image" src="images/committee/placeholder.jpg" class="leftImage" />
                <h2>Paul Hawkins</h2>
                <p>Club House Manager</p>                
            </li>
            <li> 
                <img width="255" height="186" alt="Placeholder committee member image" src="images/committee/placeholder.jpg" class="leftImage" />
                <h2>Richard Clancey</h2>
                <p>Treasurer</p>                
            </li>
            <li> 
                <img width="255" height="186" alt="Placeholder committee member image" src="images/committee/placeholder.jpg" class="leftImage" />
                <h2>Robin Ablett</h2>
                <p>Membership Accounts</p>                
            </li>
            <li> 
                <img width="255" height="186" alt="Placeholder committee member image" src="images/committee/placeholder.jpg" class="leftImage" />
                <h2>Jenny Powell &amp;<br />Kim Clancey</h2>
                <p>Bar Managers</p>                
            </li>
            <li> 
                <img width="255" height="186" alt="Placeholder committee member image" src="images/committee/placeholder.jpg" class="leftImage" />
                <h2>Graham Dewey</h2>
                <p>Website &amp; On-line Booking System Admin</p>                
            </li>
            <li> 
                <img width="255" height="186" alt="Placeholder committee member image" src="images/committee/placeholder.jpg" class="leftImage" />
                <h2>Terry Gordon</h2>
                <p>Safety Officer</p>                
            </li>
            <li> 
                <img width="255" height="186" alt="Placeholder committee member image" src="images/committee/placeholder.jpg" class="leftImage" />
                <h2>Iain Saville</h2>
                <p>Social Secretary</p>                
            </li>
            <li> 
                <img width="255" height="186" alt="Placeholder committee member image" src="images/committee/placeholder.jpg" class="leftImage" />
                <h2>Russell Dennis</h2>
                <p>Bookings &amp; Trial Flights</p>                
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

