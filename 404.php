<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head> 
    <title><?php echo strpos($_SERVER['HTTP_USER_AGENT'], 'iP')?'Alouette': 'Alouette Flying Club - 404 Error'; ?></title>
    
    <meta name="description" content="About Alouette Flying Club - 404 Error" />
    <meta name="keywords" content="Alouette, Flying, Club, Biggin Hill, Biggin, Hill, 404 Error" />
    <?php include "common/page-head.php"; ?>
    <link href="css/base.css" rel="stylesheet" media="screen" type="text/css">
    <!--[if lt IE 9]>
        <link href="css/ie.css" rel="stylesheet" media="screen" type="text/css">
    <![endif]-->
    
</head>


<body>


<?php include "common/header.php"; ?>

<div id="Content" class="clear">
    <div class="centerMessage">

        <h1>Page not found</h1>
        <h2>Error 404</h2>
        <p>Sorry, but the page you are looking for has not been found. Try checking the web site address for errors, then hit the refresh button on your browser.</p>
        <p>If you are still having problems, maybe the options at the bottom of the page might point you in the right direction. You can still use our navigation at the top of the page or return to the <a href="/index" title="Home Page">home page</a>.</p>
    </div>

    <div class="utilityCol clear">
        
        <div class="col"><?php include "common/trial-flights.php"; ?></div>
        <div class="col"><?php include "common/alouette-news.php"; ?></div>
        <div class="col last"><?php include "common/find-us.php"; ?></div>

    </div>
    
</div>


<?php include "common/footer.php"; ?>


</body> 


</html>

