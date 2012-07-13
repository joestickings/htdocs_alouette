<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9"> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black"/>

<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />


<link rel="apple-touch-icon" href="images/icons/icon_72x72.png" sizes="72x72"/>
<link rel="apple-touch-icon" href="images/icons/icon_114x114.png" sizes="114x114"/>
<link rel="shortcut icon" type="image/x-icon" href="images/icons/favicon.ico"/>

<link href="css/base.css" rel="stylesheet" media="screen" type="text/css">

<!--[if lt IE 9]>
	<link href="css/ie.css" rel="stylesheet" media="screen" type="text/css">
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript" language="javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" language="javascript" src="js/base.js"></script>

<?php
	function is_mobile_phone()
	{
		$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
		$mobiles = array("iphone","ipad", "ipod", "blackberry", "nokia", "phone","mobile safari", "iemobile");
		
		foreach($mobiles as $mobile)
		{
			if(strpos($ua,$mobile)) return true;
		}
		
		return false;
		
	}
?>
    