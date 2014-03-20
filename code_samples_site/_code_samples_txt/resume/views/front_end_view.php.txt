<?php
 /**
 * @author Tamara Jean (TJ) Fredrikson http://www.tfredrikson.com
 * @copyright Copyright (C) 2013 TJ Fredrikson
 * @license http://creativecommons.org/licenses/by-sa/3.0/ Attribution-ShareAlike 3.0
 */

/**
 * This is the simple front end view for the homepage
 *
 * It presents the HTML5 and CSS for the homepage
 */

$debug=0;

// initialize required variables
if(!isset($path_to_common)) $path_to_common = '';
if(!isset($turn_off_navigation)) $turn_off_navigation = false;

?>
                    <?php if($turn_off_navigation) : ?>
                    <!-- BEGIN PRINT VIEW - HEADER -->

<!-- Begin NAME  -->
<div style="text-align: center;">
	<h1>tamara jean (tj) fredrikson </h1>
</div>
<!-- End NAME  -->

                    <!-- END PRINT VIEW - HEADER -->
                    <?php else: ?>
                    <!-- BEGIN HERO UNIT -->
                    <div class="hero-unit well">
                        <h1>tamara jean</h1>
                        <h2>tj fredrikson</h2>
                        <div>
                        	<ul class="breadcrumb" style="background: transparent; margin-bottom: 10px; margin-top: -5px;">
                        		<li><a href="<?php print $path_to_common; ?>resume/?print=1" target="_blank">printer friendly view</a>  <span class="divider">/</span> </li>
                        		<li><a href="<?php print $pdf_resume_download_file; ?>" target="_blank">pdf version</a>  </li>
                        	</ul>
                        </div>
                        <div>
                            <a id="common_license" target="_blank" href="http://creativecommons.org/licenses/by-sa/3.0/" role="button" class="btn btn-inverse btn-medium">CCA-SA license &raquo;</a>
                            <a id="modal-120698" href="#modal-container-120698" role="button" class="btn btn-success btn-medium" data-toggle="modal">license.txt &raquo;</a>
                            <div id="modal-container-120698" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="text-align: left;">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                    <h3 id="myModalLabel">license.txt</h3>
                                </div>
                                <div class="modal-body">
                                    <pre><?php print htmlentities(file_get_contents( $path_to_common."_code_samples_txt/license.txt",true)); ?>
                                    </pre>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END HERO UNIT -->
                    <?php endif; ?>


                    <!-- BEGIN CONTENT -->



<!-- Begin TITLE -->
<div style="text-align: center;">
	<h2><em>ki fu sta la</em> ninja <br />
	<small style="color: #444;"><em>(<strong>ki</strong>ller <strong>fu</strong>ll <strong>st</strong>ack <strong>la</strong>mp)</em></small><br />
	<small>with extensive php, mysql, ajax, and javascript experience</small></h2>
</div>
<!-- End TITLE -->


<!-- Begin OBJECTIVE -->
            <div class="row-fluid">
                <div class="span12">
<!-- Begin ADDRESS -->
                <div class="span4">
<div class="" style="text-align: left; font-weight: bold;">
	<h3>tj fredrikson</h3>
	<div style="margin-top: -10px; ">
	<small>
	 P O Box 713,
	 Winters, CA, 95694<br />
	 707.344.3402<br />

<!-- Begin Email Cloaking -->
<script language='javascript' type='text/javascript'><!--
//
// Anti-Spam Email Cloaking 3.0 by David Tulga
// http://www.davidtulga.com/antispamemail.htm
//
x = '&#64;';
eml = '&#116;&#106;' + x + '&#116;&#106;&#105;&#110;&#116;&#101;&#114;&#97;&#99;&#116;&#105;&#118;&#101;&#46;&#111;&#114;&#103;';
msg = '&#116;&#106;' + x + '&#116;&#106;&#105;&#110;&#116;&#101;&#114;&#97;&#99;&#116;&#105;&#118;&#101;&#46;&#111;&#114;&#103;';
out = '<a class="cloak_eml" id="tjs_email_address" href="mailto:' + eml + '">' + msg + '</a>';
document.write(out);
// -->
</script>
<noscript>
<a href="http://tjinteractive.org/web/contact-us" target="_blank">contact tj</a>
</noscript>
<!-- End Email Cloaking -->

    </small>
    </div>
</div>
</div>
<!-- End ADDRESS -->
					<div class="span8" style="text-align: right;">
						<h3>objective</h3>
							<blockquote class="pull-right">
							 <strong>steady stream of programming assignments<br />working
							     either remotely or on-site in SanFrancisco
							     <small>tj fredrikson (when asked "what do you want?")</small>
							 </strong>
						  </blockquote>
					</div>
<!-- End OBJECTIVE -->
            	</div>
            </div>

<!-- Begin SKILLS -->
	<ul class="thumbnails">
    	<li class="span4" style="">
        	<div<?php if(!$turn_off_navigation) : ?> class="thumbnail"<?php endif; ?>>
            	<div class="caption">
                	<h3>technologies</h3>
                    <p>
                    	php, mysql, ajax, html, css, javascript, jquery,
                    	jqtouch, sencha touch, bootstrap.js,
                    	smarty, joomla,
                    	xml, xml-rpc, xpath,
                    	laszlo, java, spring,
                    	jsp, c/c++, asp.net, vb.net
                    </p>
            	</div>
          	</div>
     	</li>
    	<li class="span4" style="">
        	<div<?php if(!$turn_off_navigation) : ?> class="thumbnail"<?php endif; ?>>
            	<div class="caption">
                	<h3>tools</h3>
                    <p>
                    	git, svn, cvs, perforce,
                    	phpunit,
                    	fogbugz, jira, anomaly, unfuddle,
                    	beanstalk, make, ant, j builder,
                    	eclipse, intelli j, java visual cafe, ms visual c++,
                    	javac, jdb, gdb
                    </p>
            	</div>
          	</div>
     	</li>
    	<li class="span4" style="">
        	<div<?php if(!$turn_off_navigation) : ?> class="thumbnail"<?php endif; ?>>
            	<div class="caption">
                	<h3>systems</h3>
                    <p>
                    	apple mac (leopard, snow leopard, lion, mountain lion,
                    	mavericks),
                    	windows (3.1, nt, me, 2000, vista, xp, 7, 8),
                    	ms-dos,
                    	unix, linux (bsd, centos, fedora, etc.), novell
                    </p>
            	</div>
          	</div>
     	</li>
	</ul>
<!-- End SKILLS -->

<!-- Begin HIGHLIGHTS -->
<div class="">
    <h4>highlights</h4>
    <ul>
        <li>thirteen years programming in php (since 2001), fifteen years in
            java (since 1999), seventeen years c/c++ (since 1997)
            backed by a formal education emphasizing proven theories and
            methods for creating and learning newly developed languages
            and methodologies.</li>
        <li>excels at planning and architect-ing, then building, deploying,
            and maintaining sustainable web applications that are robust
            enough to solve the toughest issues, yet flexible enough to
            consistently integrate seamlessly with ever-emerging
            new technologies.</li>
        <li>adept at troubleshooting complex web applications,
            especially when minimal guidance, instructions, or
            documentation are available.</li>
        <li>consistently successful at taking responsibility for previously
            scrambled projects that seem doomed to failure, applying
            appropriate tools and processes to bring organization to the
            project, prioritizing issues and tasks to create a manageable
            path to deployment, and finally implementing the plan to bring
            the project to a successful live/production state.</li>
        <li>nineteen years (since 1995) testing and implementing large scale
            and enterprise-level
            software applications with the best available proprietary or
            open source technologies including java/jsp, spring, struts,
            laszlo and lzx, php and lamp, xml, xpath, xml-rpc, asp.net,
            vb.net, c#, c++/c, perl, python, and many others.</li>
        <li>client-facing technical project manager and developer of complex
            localized/internationalized (i18n) web apps, high volume e-commerce
            enabled database apps, highly accessible web applications built
            by and for blind users with varying levels of computer access and
            capabilities, as well as sophisticated web and cd-rom delivered
            custom applications purposely built so that clients can
            effortlessly manage the backend processes without requiring
            excessive support from programmers.</li>
        <li>extremely high test scores on the two mathematics sections of the
            gre (100% and 96%), straight a's in all computer science classes
            and prerequisites, and accepted to one of the toughest computer
            science degree programs on the planet (uiuc required a 1400 or
            better on two of three sections of the gre to even be considered
            for acceptance).</li>
        <li>worked, studied, and traveled in guam and the marianas, micronesia,
            the marshall islands, taiwan, the philippines, bali, sweden,
            germany, holland, france, spain, mexico, and canada.</li>
    </ul>
</div>
<!-- End HIGHLIGHTS -->
<br />
<!-- begin EXPERIENCE -->
<div class="">
    <h4>experience</h4>
    <!-- begin tj interactive, inc -->
    <div class="sectiontitle">
        <h5>
            <a href="http://tfredrikson.com/" class="titlelink">tfredrikson</a> and
            <a href="http://tjinteractive.org" class="titlelink" target="_blank">tj interactive, inc.</a>
            <br />web and mobile architect, technical lead, agile lead, senior engineer, president &amp; cto, founder
            <br />
	        <small>august 2004 - present</small>
        </h5>
    </div>
    <div>
        <ul>
            <li>web engineer leverages top-notch, standards-based, and well supported open source software that integrates with existing tools to implement efficient, stable, and geographically dispersible web solutions that solve complex business and data related issues.</li>
            <li>common solutions include import/exports via xml-based web services and/or using developers apis to link two disparate systems.</li>
            <li>excels at writing and testing code that works in multiple browser and operating system environments</li>
        </ul>
        <blockquote>
            <div class="clientsection">partial project list:</div>
            <div>
                <ul>
                    <li>mobile application for accessing
                        <a title="golightly" href="http://golightly.com/products" target="_blank">golightly</a>  social community sites from iphone, ipad, android, and blackberry devices written using jqtouch and jquery javascript libraries</li>
                    <li>google map integration and optimization to handle several thousand map locations efficiently</li>
                    <li>integrations with open source software including mediawiki wiki, vbulletin forums, lifetype blog, php icalendar, joomla cms and others</li>
                    <li>php api written using soap to facilitate salesforce integration to update member data</li>
                    <li>numerous ajax implementations including pulling data for search in tabs, map locations, mobile application data, etc.</li>
                </ul>
            </div>
        </blockquote>
        <br />
        <blockquote>
            <div class="clientsection">partial client list:</div>
            <div>
                <ul>
                    <li>
                        <a title="trekkel" href="http://trekkel.com" target="_blank">trekkel</a>  - architect, tech lead, and lead developer for travel planning site
                    </li>
                    <li>
                        <a title="golightly, inc." href="http://golightly.com/products/software" target="_blank">golightly, inc.</a>  - senior engineer developing golightly social media platform for non-profits
                    </li>
                    <li>
                        <a title="super happy pets" href="http://superhappypets.com/" target="_blank">super happy pets</a>  - shopping cart site selling hundreds of products online
                    </li>
                    <li>
                        <a title="soft paws" href="http://www.softpaws.com/" target="_blank">soft paws</a>  - shopping cart site selling nail caps for cats and dogs
                    </li>
                    <li>
                        <a title="emerging markets llc" href="http://emergingmarketsllc.com/" target="_blank">emerging markets llc</a> and
                        <a title="the micro cap report" href="http://themicrocapreport.com/" target="_blank">the micro cap report</a> - corporate sites delivering info to potential investors
                    </li>
                    <li>
                        <a title="robert bell" href="http://robertbell.com/" target="_blank">robert bell</a>  - content driven website announcing robert bell's book release
                    </li>
                </ul>
            </div>
        </blockquote>
        <br />
    </div>
    <!-- end tj interactive, inc -->
    <!-- begin nacio -->
    <div id="nacio" class="sectiontitle">
        <h5>
            <a href="#nacio" class="titlelink">nacio interactive (development services)</a>
            <br />director of engineering, technical project manager, lead developer
            <br />
	        <small>aug 2005 - aug 2007</small>
        </h5>
    </div>
    <div>
        <ul>
            <li>designing, implementing, and maintaining custom web applications and backend databases.</li>
            <li>accurately able to determine client needs and issues in the context of currently existing methods, test several demo/prototype versions of potential solutions, provide feedback to key decision makers, then implement the system, train users, and monitor client reactions via project management and collaboration software as well as bug/defect trackers.</li>
            <li>project environments can be radically different between clients, especially in cases where clients host their own site and/or have existing it staff to manage servers. development languages and databases most frequently employed include: java/spring/jsp, asp.net, vb.net, c#, php4 and php5, mysql and ms sql server.</li>
            <li>collaborate with other nacio departments to detail necessary steps to fulfill needs expressed in requests for new project bids. provide cost estimates and timeframe necessary to complete projects. project success is often measured by the difference between the initial estimate and final hours worked as well as the ultimate satisfaction of client.</li>
            <li>organizing technical projects and prioritizing developer workloads to consistently produce quality web applications within budget.</li>
        </ul>
        <blockquote>
            <div class="clientsection">client list:</div>
            <div>
                <ul>
                    <li>
                        <a title="simon wiesenthal center" href="http://www.wiesenthal.com/" target="_blank">simon wiesenthal center</a> - online business application used for data input and compilation then exported via xml to the cd-rom delivered multi-media application</li>
                    <li>
                        <a title="buck institute" href="http://www.buckinstitute.org/" target="_blank">buck institute</a> - migration from proprietary ektron cms to open source joomla! cms</li>
                    <li>
                        <a title="guide dogs for the blind" href="http://www.guidedogs.com/" target="_blank">guide dogs for the blind</a> - web app written to demonstrate various blind users' preferences and used to determine client specific needs, tested with actual "blind" power users</li>
                    <li>
                        <a title="pfizer" href="http://www.pfizer.com/" target="_blank">pfizer</a> - chemical substructure searching intranet written using the java spring framework with spring web forms, ant, and junit</li>
                    <li>
                        <a title="experience norwich university" href="http://www.norwich.edu/" target="_blank">norwich university's experience norwich (xnu)</a> - xml, php and mysql backend, adobe flash front-end</li>
                    <li>
                        <a title="wells fargo's hands on banking" href="http://www.handsonbanking.org/" target="_blank">wells fargo's hands on banking</a> &nbsp; - &nbsp;multi-lingual flash-based tutorial delivered via cd-rom and live web site</li>
                    <li>attest - web site integrated with salesforce for user authentication and support cases, registration key generator and online downloads of gasp computer auditing tools</li>
                </ul>
            </div>
        </blockquote>
        <br />
    </div>
    <!-- end nacio -->
    <!-- begin laszlo -->
    <!-- open source xml-based language using java to compile macromedia flash-byte codes -->
    <div id="laszlo" class="sectiontitle">
        <h5>
            <a href="http://www.openlaszlo.org/" class="titlelink" target="_blank">laszlo studios</a>
            <br />technical project manager, rich internet applications
            <br />
	        <small>march 2005 - october 2005</small>
        </h5>
    </div>
    <div>
        <ul>
            <li>architected and coded the java-struts portion, extended the laszlo portion, and coordinated the entire project for a struts-to-laszlo internationalization piece enabling one set of java resource bundles to be used for language strings by both the struts and laszlo sections of a live auction that uses laszlo's persistent connection technology.</li>
            <li>traveled to client site to provide integration support during development of internationalization piece.</li>
            <li>debugged and extended code for a live, animated hotel locator map usable by more than one hotel chain.</li>
            <li>intermittently provided email estimates and production quality code (within budget) working from my home office.</li>
        </ul>
        <blockquote>
            <div class="clientsection">client list:</div>
            <div>
                <ul>
                    <li>
                        <a title="auto trade center website" href="#laszlo">auto trade center</a> - multi-lingual vehicle auction using laszlo's persistent connection
                        <br />
                    </li>
                    <li>
                        <a title="la quinta locator map" href="http://www.lq.com/lq/map/index.jsp" target="_blank">la quinta</a> - semi-animated data-driven hotel locator map
                        <br />
                    </li>
                </ul>
            </div>
        </blockquote>
        <br />
    </div>
    <!-- end laszlo -->
    <!-- begin marketlive -->
    <div class="sectiontitle">
        <h5>
            <a href="http://marketlive.com/" class="titlelink" target="_blank">marketlive</a> (multimedia live)
            <br />web engineer, e-commerce
            <br />
	        <small>sept 2004 - march 2005</small>
        </h5>
    </div>
    <div>
        <ul>
            <li>incident response (live site engineering) for an e-commerce company supporting 150+ clients totaling over $6 billion in online orders per year. acted as engineering's escalation point when it/managed services processes failed to resolve live site issues. e-commerce platform written in j2ee using java, jsp, xml, soap, and sql.</li>
            <li>debugged and enhanced complex java applications that required integration of multiple technologies.</li>
            <li>consistently produced clean code and integrated it into the live source to solve pressing live site issues.</li>
        </ul>
        <blockquote>
            <div class="clientsection">client list:</div>
            <div>
                <ul>
                    <li>
                        <a title="buckle" href="http://www.buckle.com/" target="_blank">buckle</a>
                    </li>
                    <li>
                        <a title="keds footwear" href="http://www.keds.com/" target="_blank">keds footwear</a>
                        <br />
                    </li>
                    <li>
                        <a title="orion telescopes" href="http://www.telescope.com/" target="_blank">orion telescopes</a>
                    </li>
                    <li>
                        <a title="zia health and beauty" href="http://www.zianatural.com/" target="_blank">zia health and beauty</a>
                        <br />
                    </li>
                    <li>and 75 others on
                        <a title="marketlive" href="http://marketlive.com/" target="_blank">marketlive's customer list</a>
                        <br />
                    </li>
                </ul>
            </div>
        </blockquote>
        <br />
    </div>
    <!-- end marketlive -->
    <!-- begin fenario -->
    <div class="sectiontitle">
        <h5>
            <a href="http://tfredrikson.com/" class="titlelink">tfredrikson</a> and
            <a href="http://www.fenario.com/" class="titlelink" target="_blank">fenario</a>
            <br />freelance engineer
            <br />
	        <small>january 2000 - present</small>
        </h5>
    </div>
    <div>
        <ul>
            <li>managing all phases of web development from conception to implementation support, including architecting the design, coding software feature requests, on-going project management, and live incident response.</li>
            <li>designing, implementing, and maintaining custom web applications and backend databases.</li>
            <li>developing fully functional e-commerce enabled internet shops using j2ee or lamp including java or php as the host language, cgi or laszlo with http, mysql/mssql/oracle as the backend database, resin/tomcat for java virtual machines, and apache as the web server with unix/linux or iis with a windows machine.</li>
            <li>developing websites for musicians, artists, and promoters (including sites for members of jefferson starship, frank zappa, sons of champlin, sly and the family stone, and the lake tahoe based band, blue turtle seduction) while promoting musical bands and venues including the reopening of the avalon ballroom in san francisco in 2002.</li>
        </ul>
        <blockquote>
            <div class="clientsection">these sites were built pre-2005 and are still online today:</div>
            <div>
                <ul>
                    <li>
                        <a title="tracy notaro" href="http://www.tracynotaro.com/" target="_blank">tracy notaro</a> - photographer's gallery including thumbnails of featured musicians</li>
                    <li>
                        <a title="h krouk" href="http://www.hkrouk.com/" target="_blank">hkrouk</a> - graphic artist's gallery of posters promoting and commemorating musical events</li>
                    <li>
                        <a title="cahoots graffix" href="http://www.cahootsgraffix.biz/" target="_blank">cahootsgraffix</a> - e-commerce site selling musicians' posters (godaddy shopping cart)</li>
                </ul>
            </div>
        </blockquote>
        <br />
    </div>
    <!-- end fenario -->
    <!-- begin rightscenter -->
    <div class="sectiontitle">
        <h5>
            <a href="http://rightscenter.com/" class="titlelink" target="_blank">rightscenter</a>
            <br />software engineer, intellectual property rights
            <br />
	        <small>nov 2000 - july 2001</small>
        </h5>
    </div>
    <div>
        <ul>
            <li>translated high-level design goals into low-level details and implemented these designs.</li>
            <li>completed tasks from remote home office with minimal supervision on or before all established deadlines.</li>
        </ul>
    </div>
    <!-- end rightscenter -->
    <!-- begin andromedia -->
    <div class="sectiontitle">
        <h5>
            <a href="http://www.sfgate.com/business/article/Macromedia-Picks-Up-Andromedia-Sets-Shockwave-2904711.php" class="titlelink" target="_blank">andromedia</a>
            <br />build/release intern, web personalization software
            <br />
	        <small>aug 1999 - oct 1999</small>
        </h5>
    </div>
    <div>
        <ul>
            <li>buildmaster for engineering company later acquired by macromedia
            (now adobe). software made it easier for e-commerce vendors to
            track information about visitors and provide choices tailored to the
            visitors likes and dislikes.</li>
        </ul>
    </div>
    <!-- end andromedia -->
    <!-- begin fema -->
    <div class="sectiontitle">
        <h5>
            <a href="http://www.fema.gov/fema-region-ix-arizona-california-hawaii-nevada-pacific-islands" class="titlelink" target="_blank">federal emergency mgmt agency</a>
            <br />reservist, disaster assistance employee, planner, software specialist
            <br />
	        <small>sept 1992 - jan 2000</small>
        </h5>
    </div>
    <div>
        <ul>
            <li>seven years with increasing responsibility in all areas of software development including application specification and design, testing/documenting software, and training/managing database and software technicians.</li>
            <li>five years designing, documenting, accepting enhancements, deploying new releases, and supporting old versions of the ms-dos based system and later the windows95-based disaster assistance software.</li>
        </ul>
    </div>
    <!-- end fema -->
</div>
<!-- end EXPERIENCE -->
<br />
<!-- Begin EDUCATION -->
<div class="">
    <h4>education</h4>
    <!-- begin uiuc -->
    <div class="sectiontitle">
        <h5>
            <a href="http://cs.illinois.edu/" class="titlelink" target="_blank">university of illinois, urbana-champaign</a>
            <br />started master of science - computer science (software track: databases)
            <br />
	        <small>2001</small>
        </h5>
    </div>
    <div>
        <ul>
            <li>eight courses remaining for completion of the master's of science in computer science degree.</li>
            <li>designed and implemented sql databases and web-based interfaces using oracle8i and visual c++.</li>
        </ul>
    </div>
    <!-- end uiuc -->
    <!-- begin sfsu -->
    <div class="sectiontitle">
        <h5>
            <a href="http://cs.sfsu.edu/" class="titlelink" target="_blank">san francisco state university</a>
            <br />bachelor of science equivalency - computer science (software track: programming languages)
            <br />
	        <small>2000</small>
        </h5>
    </div>
    <div>
        <ul>
            <li>achieved at least top 10% in every computer science class taken.</li>
            <li>developed an interpreter/debugger for programming language modeled on java's virtual machine.</li>
        </ul>
    </div>
    <!-- end sfsu -->
    <!-- begin uva -->
    <div class="sectiontitle">
        <h5>
            <a href="http://spanitalport.virginia.edu/" class="titlelink" target="_blank">university of virginia</a>
            <br />bachelor of arts - spanish (independent study: human linguistics)
            <br />
	        <small>1992</small>
        </h5>
    </div>
    <div>
        <ul>
            <li>studied
                <em>spanish literature</em>and
                <em>spanish history</em>in
                <a href="http://www.virginia.edu/valencia/" class="titlelink" target="_blank">valencia, spain</a> .</li>
            <li>independent coursework focussed on &nbsp;
                <em>socio-linguistics</em>and
                <em>how humans best learn languages</em>.</li>
            <li>after discovering that humans learn languages best before age nine, taught spanish to a local third grade class once every week for ten weeks.</li>
        </ul>
    </div>
    <!-- end uva -->
</div>
<!-- End EDUCATION -->
<br />
<!-- Begin TEST SCORES -->
<div class="">
    <!-- begin gre -->
    <h4>test scores</h4>
    <h5>
        <a href="http://www.gre.org/" class="titlelink" target="_blank">graduate record exam</a> (gre)
	    <small>1995</small>
    </h5>
    <div>
        <ul>
            <li>analytical reasoning (mathematics) 800/800 (100%)</li>
            <li>quantitative (mathematics) 770/800 (96%)</li>
            <li>verbal 560/800 (70%)</li>
        </ul>
    </div>
    <!-- end gre -->
</div>
<!-- End TEST SCORES -->




                    <!-- END CONTENT -->

