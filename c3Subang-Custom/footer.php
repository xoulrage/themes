<?php

/*

 * The Footer of the theme.

 */

 

$wp_url = get_bloginfo('wpurl'); 

 

 

?>

  

  <!-- Footer -->

  <div id="footer">

    

    <div id="footer-banner">

      <div id="banner"><a href="<?php echo $wp_url; ?>/our-journey"><img src="<?php echo get_template_directory_uri(); ?>/images/footbanner-ourjourney.jpg" alt="Our Journey"></a></div>

      <div id="banner"><a href="<?php echo $wp_url; ?>/our-culture"><img src="<?php echo get_template_directory_uri(); ?>/images/footbanner-ourculture.jpg" alt="Our Culture"></a></div>

      <div id="banner"><a href="<?php echo $wp_url; ?>/our-core-values"><img src="<?php echo get_template_directory_uri(); ?>/images/footbanner-ourvalues.jpg" alt="Our Values"></a></div>

    </div>

    <div class="reset"></div>

    <div class="grey-seperator"></div>



    <div id="footer-info">

      

      <div id="panel-left">

        <div><img src="<?php echo get_template_directory_uri(); ?>/images/footer-sharing-banner.jpg" /></div>

        <div>

          <span class="st_twitter_large" displayText="Tweet"></span>

          <span class="st_facebook_large" displayText="Facebook"></span>

          <span class="st_ybuzz_large" displayText="Yahoo! Buzz"></span>

          <span class="st_gbuzz_large" displayText="Google Buzz"></span>

          <span class="st_email_large" displayText="Email"></span>

          <span class="st_sharethis_large" displayText="ShareThis"></span>

        </div>

      </div>

      <div id="panel-right">

        <div><img src="<?php echo get_template_directory_uri(); ?>/images/footer-contactus.jpg" usemap="#map_contactus" /></div>

        <map name="map_contactus">

		      <area shape="rect" coords="205,135,319,154" href="http://maps.google.com.my/maps/ms?ie=UTF8&amp;hl=en&amp;t=h&amp;msa=0&amp;msid=208115174447005034972.000499d8a72c4c14e651c&amp;ll=3.058839,101.593537&amp;spn=0.020441,0.027466&amp;z=15&amp;source=embed" target="_blank" />

        </map>        

      </div>

      <div class="reset"></div>  



      <div id="footer-navi">

        <div id="navi-cols">

          <ul>

            <li><a href="<?php echo $wp_url; ?>/who-are-we">WHO ARE WE</a></li>

            <li><a href="<?php echo $wp_url; ?>/pastors">PASTORS</a></li>

            <li><a href="<?php echo $wp_url; ?>/team">TEAM</a></li>

            <li><a href="<?php echo $wp_url; ?>/our-culture">OUR CULTURE</a></li>

          </ul>

        </div>

        <div id="navi-cols">

          <ul>

            <li><a href="<?php echo $wp_url; ?>/church">CHURCH</a></li>

            <li><a href="<?php echo $wp_url; ?>/ministry">MINISTRY</a></li>

            <li><a href="<?php echo $wp_url; ?>/schedule">SCHEDULE</a></li>

            <li><a href="<?php echo $wp_url; ?>/c3subang-kids">KIDS</a></li>

          </ul>

        </div> 

        <div id="navi-cols">

          <ul>

            <li><a href="<?php echo $wp_url; ?>/faqs">FREQUENTLY ASKED QUESTIONS</a></li>

            <li><a href="<?php echo $wp_url; ?>/resources">RESOURCES</a></li>

            <li><a href="<?php echo $wp_url; ?>/prayer-request">PRAYER REQUEST</a></li>

            <li><a href="<?php echo $wp_url; ?>/projects">PROJECTS WE HAVE DONE</a></li>

          </ul>

        </div> 

      </div>      

      <div class="reset"></div>

      

      <div id="copyright">&copy; 2010 - <?php echo date('Y'); ?>. All rights reserved. C3 CHURCH SUBANG</div>

      <div class="reset"></div>

      

    </div>

    <div class="reset"></div>

      

  </div>

  <div class="reset"></div>

  <!-- End - Footer -->

  

</div>



<!-- Social Media Share Buttons -->

<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>

<script type="text/javascript">stLight.options({publisher:'8d40f61c-3a57-43a5-9a3d-dbd74e6f23bd'});</script>

<!-- End - Social Media Share Buttons -->



<!-- Google Analytics -->

<script type="text/javascript">

  var _gaq = _gaq || [];

  _gaq.push(['_setAccount', 'UA-1577611-19']);

  _gaq.push(['_trackPageview']);



  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();

</script>

<!-- End - Google Analytics -->



</body>

</html>