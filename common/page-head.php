<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9"> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

<meta name="robots" content="Index, Follow" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black"/>

<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />


<link rel="apple-touch-icon-precomposed" href="images/icons/72x72.png" sizes="72x72"/>
<link rel="apple-touch-icon-precomposed" href="images/icons/114x114.png" sizes="114x114"/>
<link rel="shortcut icon" type="image/x-icon" href="images/icons/favicon.ico"/>

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