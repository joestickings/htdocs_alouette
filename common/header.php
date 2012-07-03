<header>
	
    <div id="HeaderContent">
        <a href="#">
            <img src="../images/core/logo.gif" width="212" height="66" alt="Alouette Flying Club" />
            <img src="../images/core/logo_text.gif" width="134" height="36" alt="Established 1959 Based at Biggin Hill" id="LogoText" />
        </a>

        <nav id="MembersNav">
            <span>Members area:</span>

            <ul class="clear">
                <li><a href="#">Latest news</a></li>
                <li><a href="#">Accounts</a></li>
                <li><a href="#">Bookings</a></li>
                <li><button>Online booking</button></li>
            </ul>

            <div id="MembersNavLogIn" class="clear">
                <form method="post" action="#">
                    <label for="OnlineBookingUsername">Username</label>
                    <input type="text" id="OnlineBookingUsername" name="OnlineBookingUsername" value="" />

                    <label for="OnlineBookingPassword">Password</label>
                    <input type="password" id="OnlineBookingPassword" name="OnlineBookingPassword" value="" />

                    <input type="submit" class="button" value="Log in" />
                    <button id="MembersNavClose">Close</button>
                </form>
            </div>
        </nav>

    </div>

    <nav id="MainNav">

    		<ul>
            	<li <?php if($TabName == "Home") { ?>class="selected"<?php } ?>><a href="#">Home</a></li>
                <li <?php if($TabName == "About us") { ?>class="selected"<?php } ?>><a href="#">About us</a></li>
                <li <?php if($TabName == "Trial flights") { ?>class="selected"<?php } ?>><a href="#">Trial flights</a></li>
                <li <?php if($TabName == "Achievements") { ?>class="selected"<?php } ?>><a href="#">Achievements</a></li>
                <li <?php if($TabName == "Aircraft") { ?>class="selected"<?php } ?>><a href="#">Aircraft</a></li>
                <li <?php if($TabName == "FAQ's") { ?>class="selected"<?php } ?>><a href="#">FAQ's</a></li>
                <li <?php if($TabName == "Learning") { ?>class="selected"<?php } ?>><a href="#">Learning</a></li>
                <li <?php if($TabName == "The Committee") { ?>class="selected"<?php } ?>><a href="#">The Committee</a></li>
                <li <?php if($TabName == "Weather") { ?>class="selected"<?php } ?>><a href="#">Weather</a></li>
                <li <?php if($TabName == "Links") { ?>class="selected"<?php } ?>><a href="#">Links</a></li>
                <li <?php if($TabName == "Find us") { ?>class="selected last"<?php } else { ?>class="last"<?php } ?>><a href="#">Find us</a></li>
            </ul>  

    </nav>

</header>


<?php
if(preg_match('/(?i)msie [1-6]/',$_SERVER['HTTP_USER_AGENT'])) {
   echo '<div id="IEMessage"><section class="gridWidth">Your are currently viewing my web site in version <strong>6</strong> of <strong>Internet Explorer</strong>.<br />For a better experience I suggest upgrading to version <strong>7</strong> or greater.<br />For the best experience <strong>Mozilla Firefox</strong>, <strong>Google Chrome</strong> or <strong>Safari</strong> are the internet browsers for you.</section></div>';
  }


?>