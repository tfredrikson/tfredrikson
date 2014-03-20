<?php
 /**
 * @author Tamara Jean (TJ) Fredrikson http://www.tfredrikson.com
 * @copyright Copyright (C) 2013 TJ Fredrikson
 * @license http://creativecommons.org/licenses/by-sa/3.0/ Attribution-ShareAlike 3.0
 */ 

/**
 * This is the simple front end view for the footer on all pages
 * 
 * It presents the HTML5 and CSS that displays the header
 *
 * it expects:
 *
 * $path_to_common 
 *     is the path from this view's index.php to the common folder in the root directory
 *     Example:  $path_to_common = '../'; 
 *
 * $turn_off_footer_fluff
 * 	   whether or not to include the footerlinks, mailing list, etc 
 *     Example:  $turn_off_footer_fluff = true; // printer friendly view
 *
 */ 

$debug=0;

?>
                    <?php if(isset($turn_off_footer_fluff) && $turn_off_footer_fluff) : ?>
                    <!-- PRINT VIEW - NO FOOTER -->
                    <?php else: ?>
                    <!-- BEGIN FOOTER FLUFF -->
                    <div class="span11" style="/*margin-bottom: 1000px;*/">
                        <div class="span12">
                        	<hr style="padding: 10px; margin: 0px;" />
	                        <div class="">
		                        <ul class="breadcrumb" style="background: transparent; margin-bottom: 10px; margin-top: -5px; text-align: center;">
								  <li><a href="<?php print $path_to_common; ?>">home</a> <span class="divider">/</span></li>
								  <li><a href="<?php print $path_to_common; ?>code_samples/">code samples</a> <span class="divider">/</span></li>
								  <li><a href="<?php print $path_to_common; ?>resume/">resume</a> <span class="divider">/</span></li>
		  						  <li><a href="http://tjinteractive.org/web/index.php/contact-us" target="_blank">contact tj</a> </li>
    							</ul>
                    	    </div>
                        	<hr style="padding: 10px; margin: 0px;" />
                    	</div>

                        <div class="span12">
                            <div class="span12">
                                <div style="text-align: center;">
                                    <a href="#at_top" class="btn">to top<span class="caret-up-black"></span></a>
                                </div>
                            </div>
                        </div>


                        <div class="span12">
                            <div class="span9">
	                        	<hr />
                                <blockquote style="font-weight: bold;">1. Identify your toughest problem.
                                    <br />2. Solve it the simplest way possible.
                                    <br />3. Repeat.
                                    <small>Kent Beck, eXtreme developer</small>
                                </blockquote>
                            </div>
                            <div class="span3" style="text-align: left;">
	                        	<hr />
                                <div id="mailchimp">
                                    <!-- Begin MailChimp Signup Form -->
                                    <!--<link href="http://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">-->
                                    <div id="mc_embed_signup">
                                        <form action="http://tjinteractive.us7.list-manage.com/subscribe/post?u=d2fe24057cffade6cf39f86c8&amp;id=82d7d469cf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="novalidate">
                                            <label for="mce-EMAIL">
                                                <strong>Join the Mailing List</strong>
                                            </label>
                                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required="" style="width: 95%;">
                                            <br />
                                            <div style="text-align: right;">
                                                <input type="submit" value="GO!" name="subscribe" id="mc-embedded-subscribe" class="btn btn-inverse btn-small" style="">
                                            </div>
                                        </form>
                                    </div>
                                    <!--End mc_embed_signup-->
                                </div>
                            </div>
                        </div>
                        <div class="span12">
                            <div class="span6">
                            	<hr />
                                <div class="customnopadding">This site is mobile responsive
                                    <br>(check it out at
                                    <a class="tj_dark" href="http://ami.responsivedesign.is/?url=" target="_blank" onclick="return build_url(this,true);">Am I Responsive</a>)
                                    <!-- &nbsp; or &nbsp; <a class="tj_dark" href="http://mattkersley.com/responsive/?" target="_blank" onclick="return build_url(this, false);">Matt's Responsive Tester</a>
-->
                                    <br>it is valid HTML5 (
                                    <a class="tj_dark" id="validator" href="http://validator.w3.org/check?uri=" target="_blank" onclick="return build_url(this, true);">see the validator</a>)
                                    <script>
                                        function build_url(obj, encode_URL)
                                            {
                                                var sURL = '';
                                                if(encode_URL)
                                                {
                                                  sURL = encodeURIComponent(window.location);
                                                }
                                                else
                                                {
                                                  sURL = window.location;
                                                }
                                                obj.href += sURL;
                                                return true;
                                        	}
                                    </script>
                                    <br>and has been tested on many different devices and in many different browsers
                                    <br>(see the
                                    <a class="tj_dark" href="http://www.browserstack.com/screenshots/b175134d994cf9534b69a04a34e35b67f6d18d58" target="_blank">Browserstack screenshots</a>)
                                    <br />
                                    <br />
                                    <a href="http://www.hostgator.com/green-web-hosting.shtml" target="_blank"><img src="http://blog.hostgator.com/images/250x90reseller.gif" alt="this site is green"></a>
                                    <br />
                                    <br />
                                </div>
                            </div>
                            <div class="span6">
                            	<hr />
                                <div style="text-align: right;">This site was built using the default design provided by
                                    <br />
                                    <a href="http://layoutit.com" target="_blank">LayoutIt</a> with
                                    <a href="http://getbootstrap.com/" target="_blank">Bootstrap.js</a> and
                                    <a href="http://lesscss.org/" target="_blank">LESS.CSS</a>
                                    <br />It's written in
                                    <a href="http://php.net/" target="_blank">PHP</a> and follows a loose
                                    <a href="http://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller" target="_blank">MVC</a> 
                                    pattern
                                    <br />It uses 
                                    <a href="http://jquery.com/" target="_blank">JQuery</a> for tabs and 
                                    <a href="http://en.wikipedia.org/wiki/Ajax_(programming)" target="_blank">Ajax</a> and
                                    <br />reads and writes some of it's data in
                                    <a href="http://www.json.org/" target="_blank">JSON</a>
                                    <br />
                                    <br />
                                    <a rel="license" target="_blank" href="http://creativecommons.org/licenses/by-sa/3.0/"><img 
								alt="Creative Commons License" style="border-width:0" 
								src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" /></a>
                                    <br />This work is licensed under a
                                    <br />
                                    <a rel="license" target="_blank" href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>.
                                    <br />&copy; 2013 TJ Fredrikson
                                    <br />
                                </div>
                            </div>
                        </div>
                        <div class="span12">
	                        <div style="text-align: center; margin-top: 50px; ">
    	                        <a href="#at_top" class="btn">to top<span class="caret-up-black"></span></a>
        	                </div>
	                    </div>
                    </div>
                    
			        <div class="span12" style="height: 40px;"></div>
                    <!-- END FOOTER FLUFF -->
					<?php endif; ?>
                    
                </div>
            </div>
        </div>
        <!-- END WRAPPER -->
    </body>

</html>