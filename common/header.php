<div id="Header">
	
    <div id="HeaderContent">
        <a href="/index" id="Logo" title="Alouette Flying Club">
            <img src="../images/core/logo.gif" width="212" height="66" alt="Alouette Flying Club" />
            <img src="../images/core/logo_text.gif" width="134" height="36" alt="Established 1959 Based at Biggin Hill" id="LogoText" />
        </a>

        <div id="MembersNav">

            <span>Members area:</span>

            <ul>
                <li><a href="/alouette-news">Latest news</a></li>
                <li><a href="/accounts">Accounts</a></li>
                <li><a href="/bookings">Bookings</a></li>
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

                    <a href="http://213.239.220.199/aero-vor.ch/pro/lib/cgi-bin/login.cgi?action=Form&company=alouette_flying_club" target="_blank" id="ForgotPassword">Forgot your password?</a>

                    <input type="submit" class="button" value="Log in" />
                    <button id="MembersNavClose">Close</button>

                    
                    <textarea id="TermsBox" rows="10" cols="40" wrap="virtual" readonly="readonly">
Only instructors and current Full Flying members of Alouette are permitted to log into this system.

Members are expected to abide by the rules of the club and are reminded that:

1. You may not book more than two time slots at any one time, in fact the system prevents this.

2. If taking an aircraft for a whole day, or more, a minimum tacho time of 2 hours per day should be flown. This may be averaged over a number of days, if appropriate. For instance on a 3 day trip, 6 hours tacho time should be flown in total.

3. If you wish to take an aircraft for a trip that involves an overnight stay, please talk to the booking service administrator first.

4. Please remember to cancel any bookings you can no longer honour.

Alouette Flying Club does not take any responsibility for any loss, damage or other problem caused by use of this system. Users therefore make use of the system entirely at their own risk.
                    </textarea>

                </form>

            </div>
        </div>

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

    <div id="MainNav">

            <button id="ShowMenuButton">Show main menu <span class="icon plus"><!-- --></span></button>

    		<ul>
            	<li <?php if($TabName == "Home") { ?>class="selected"<?php } ?>><a href="/index">Home</a></li>
                <li <?php if($TabName == "About us") { ?>class="selected"<?php } ?>><a href="/about-us">About us</a></li>
                <li <?php if($TabName == "Trial flights") { ?>class="selected"<?php } ?>><a href="/trial-flights">Trial flights</a></li>
                <li <?php if($TabName == "Aircraft") { ?>class="selected"<?php } ?>><a href="/aircraft">Aircraft</a></li>
                <li <?php if($TabName == "Weather") { ?>class="selected"<?php } ?>><a href="/weather">Weather</a></li>
                <li <?php if($TabName == "FAQ's") { ?>class="selected"<?php } ?>><a href="/faq">FAQ's</a></li>
                <li <?php if($TabName == "Learning") { ?>class="selected"<?php } ?>><a href="/learning">Learning</a></li>
                <li <?php if($TabName == "The Committee") { ?>class="selected"<?php } ?>><a href="/committee">The Committee</a></li>
                <li <?php if($TabName == "Achievements") { ?>class="selected"<?php } ?>><a href="/achievements">Achievements</a></li>
                <li <?php if($TabName == "Links") { ?>class="selected"<?php } ?>><a href="/links">Links</a></li>
                <li <?php if($TabName == "Find us") { ?>class="selected last"<?php } else { ?>class="last"<?php } ?>><a href="/find-us">Find us</a></li>
            </ul>  

    </div>

</div>


<?php
if(preg_match('/(?i)msie [1-6]/',$_SERVER['HTTP_USER_AGENT'])) { ?>
   <div id="IEMessage">
        <button>Close</button>
        <div class="heading">You are currently viewing the Alouette web site in version 6 of Internet Explorer</div>
        <p>For a better experience we suggest upgrading to version 7 or greater.</p>
        <p>For the best possible experience we strongly suggest using <strong>Mozilla Firefox</strong>, <strong>Google Chrome</strong> or <strong>Safari</strong>.</p>
   </div>
<?php  } ?>


