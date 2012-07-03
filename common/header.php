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

            <div id="MembersNavLogIn">
                <form method="post" action="http://213.239.220.199/aero-vor.ch/pro/lib/cgi-bin/login.cgi" name="frm" target="_blank">
                    
                    <input type="hidden" value="Enter" name="action">
                    <input type="hidden" value="alouette_flying_club" name="company">

                    <label for="OnlineBookingUsername">Username</label>
                    <input type="text" id="OnlineBookingUsername" name="Username" value="" />

                    <label for="OnlineBookingPassword">Password</label>
                    <input type="password" id="OnlineBookingPassword" name="Password" size="15" value="" />

                    <input type="submit" class="button" value="Log in" />
                    <button id="MembersNavClose">Close</button>
                </form>
            </div>
        </nav>

        <?php if(!is_mobile_phone()) { ?>
            <div id="SocialMedia">
                
                <?php $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>

                <!-- GOOGLE -->
                <span id="Header-SocialMedia-Google">
                <!-- Place this tag where you want the +1 button to render -->
                <g:plusone size="medium" annotation="none" href="<?php echo $url; ?>"></g:plusone>
                
                <!-- Place this render call where appropriate -->
                <script type="text/javascript">
                  (function() {
                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                    po.src = 'https://apis.google.com/js/plusone.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                  })();
                </script>
                </span>
                
                <!-- TWITTER -->
                <span id="Header-SocialMedia-Twitter">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $url; ?>" data-count="none">Tweet</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </span>
                
                <!-- FACEBOOK -->
                <span id="Header-SocialMedia-Facebook">
                    <iframe src="//www.facebook.com/plugins/like.php?href=<?php echo $url; ?>&amp;send=false&amp;layout=button_count&amp;width=51&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" height="21" width="51" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowTransparency="true"></iframe>
                </span>
            
            </div>
        <?php } ?>


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