<?php
 /**
 * @author Tamara Jean (TJ) Fredrikson http://www.tfredrikson.com
 * @copyright Copyright (C) 2013 TJ Fredrikson
 * @license http://creativecommons.org/licenses/by-sa/3.0/ Attribution-ShareAlike 3.0
 */ 

/**
 * This is the simple front end view for the header on all pages
 * 
 * It presents the HTML5 and CSS that displays the header
 *
 * it expects:
 *
 * $path_to_common 
 *     is the path from this view's index.php to the common folder in the root directory
 *     Example:  $path_to_common = '../'; 
 *
 * $turn_off_navigation
 * 	   whether or not to include the main navigation 
 *     Example:  $turn_off_navigation = true; // printer friendly view
 *
 */ 

$debug=0;

// initialize required variables
if(!isset($path_to_common)) $path_to_common = '';
require_once( $path_to_common.'configuration.php' );

if(!isset($turn_off_navigation)) $turn_off_navigation = false;

?><!doctype html>
<html xml:lang="en-gb" lang="en-gb">
    
    <head>
        <meta charset="utf-8">
        <title>TJ's code samples and resume</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="code samples and resume by Tamara Jean (TJ) Fredrikson">
        <meta name="author" content="Tamara Jean (TJ) Fredrikson">
        
        <!-- BEGIN STYLES -->
        <!--link rel="stylesheet/less" href="<?php print $path_to_common; ?>_common/views/less/bootstrap.less" type="text/css" /-->
        <!--link rel="stylesheet/less" href="<?php print $path_to_common; ?>_common/views/less/responsive.less" type="text/css" /-->
        <!--script src="<?php print $path_to_common; ?>_common/views/js/less-1.3.3.min.js"></script-->
        <!--append '#!watch' to the browser URL, then refresh the page. -->
        <link href="<?php print $path_to_common; ?>_common/views/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php print $path_to_common; ?>_common/views/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="<?php print $path_to_common; ?>_common/views/css/style.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="<?php print $path_to_common; ?>_common/views/js/html5shiv.js"></script>
        <![endif]-->
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php print $path_to_common; ?>_common/views/img/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php print $path_to_common; ?>_common/views/img/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php print $path_to_common; ?>_common/views/img/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php print $path_to_common; ?>_common/views/img/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="<?php print $path_to_common; ?>_common/views/img/favicon.ico">
        <style type="text/css">
            pre strong {
            	font-size: 16px;
            }
            a {
            	color: #51A351;
            }
            a:hover {
            	color: #51A351;
            }
            
            .hero-unit {
				padding: 6px;
				padding-bottom: 30px;            
				text-align: center;
			}
            
            /* START 2013-10-13 http://www.sitepoint.com/forums/showthread.php?934051-Change-styles-of-Bootstrap-Hover-amp-Fieldset-effect */
			input[type=text], input[type=password], textarea {
/*			
      			font-size:14px;
      			border:0.7px solid #ccc;
      			background: white;
      			padding: 4px 6px;
      			line-height: 20px;
      			height: 20px;
      			width: 160px;
      			border-radius: 4px;
*/      			
			}
			input[type=text]:focus, input[type=password]:focus, input[type=button]:focus, textarea:focus,  {
      			border-color:black;
      			-moz-box-shadow: 0px 0px 6px #dfdfdf;
      			-webkit-box-shadow: 0px 0px 6px #dfdfdf;
      			box-shadow: 0px 0px 6px #dfdfdf;
			}			
			.dropdown-menu > li > a:hover {
      			color: white;
      			background: #51A351;
			}
            /* END 2013-10-13 http://www.sitepoint.com/forums/showthread.php?934051-Change-styles-of-Bootstrap-Hover-amp-Fieldset-effect */


            /* START 2013-10-14 http://stackoverflow.com/questions/14230824/twitter-bootstrap-dropdown-border */
			a.dropdown-toggle { outline: none}			
            /* END 2013-10-14 http://stackoverflow.com/questions/14230824/twitter-bootstrap-dropdown-border */
			
			/* START 2013-10-14 http://stackoverflow.com/questions/10801325/changing-bootstrap-caretcolor-and-position */
			/* AND http://css-tricks.com/examples/ShapesOfCSS/ */
            .caret-up-black {
				display: inline-block;
				width: 0px;
				height: 0px;
				margin-left: 2px;
				vertical-align: middle;
				border-top: none;
				border-bottom: 4px solid #000;
				border-right: 4px solid transparent;
				border-left: 4px solid transparent;
				border-top-width: 0px;
				border-top-style: dotted;
				content: "";
			}
			/* END 2013-10-14 http://stackoverflow.com/questions/10801325/changing-bootstrap-caretcolor-and-position */
			/* AND http://css-tricks.com/examples/ShapesOfCSS/ */
			
        </style>

        <!-- BEGIN JAVASCRIPT -->
        <script type="text/javascript" src="<?php print $path_to_common; ?>_common/views/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php print $path_to_common; ?>_common/views/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php print $path_to_common; ?>_common/views/js/scripts.js"></script>
    </head>
    
    <body>
        <!-- BEGIN WRAPPER -->
        <div class="container-fluid">
            <div class="row-fluid">
                <div id="at_top" class="span12">


                    <?php if(isset($turn_off_navigation) && $turn_off_navigation) : ?>
                    <!-- PRINT VIEW - NO NAVIGATION -->
                    <?php else: ?>
                    <!-- BEGIN NAVIGATION -->
                    <div class="navbar navbar-inverse" style="margin: 15px auto; ">
                        <div class="navbar-inner">
                            <div class="container-fluid">
                                <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
                                <a href="<?php print $path_to_common; ?>" class="brand">tfredrikson</a>
                                <div class="nav-collapse collapse navbar-responsive-collapse">
                                    <ul class="nav">
                                        <li>
                                            <a href="<?php print $path_to_common; ?>code_samples">code samples</a>
                                        </li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">demos<strong class="caret"></strong></a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-header">code tests</li>
                                                <li>
                                                    <a href="<?php print $path_to_common; ?>code_samples/_demos/ajax_print/">ajax print</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li class="nav-header">coming soon</li>
                                                <li class="disabled">
                                                    <a href="<?php print $path_to_common; ?>code_samples/">javascript web service</a>
                                                </li>
                                                <li class="disabled">
                                                    <a href="<?php print $path_to_common; ?>code_samples/">stanford epgy</a>
                                                </li>
                                                <li class="disabled">
                                                    <a href="<?php print $path_to_common; ?>code_samples/">project euler</a>
                                                </li>
                                                <li class="disabled">
                                                    <a href="<?php print $path_to_common; ?>code_samples/">more...</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">downloads<strong class="caret"></strong></a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-header">PHP download</li>
                                                <li>
                                                    <a href="<?php print $all_in_one_download_file; ?>">all-in-one</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li class="nav-header">PDF download</li>
                                                <li>
                                                    <a href="<?php print $pdf_resume_download_file; ?>" target="blank">tj's resume pdf</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">resume<strong class="caret"></strong></a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-header">resume views</li>
                                                <li>
                                                    <a href="<?php print $path_to_common; ?>resume">overview</a>
                                                </li>
                                                <li>
                                                    <a href="<?php print $path_to_common; ?>resume/?print=1" target="blank">printer friendly view</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li class="nav-header">downloads</li>
                                                <li>
                                                    <a href="<?php print $pdf_resume_download_file; ?>" target="blank">tj's resume pdf</a>
                                                </li>
                                                <li>
                                                    <a href="<?php print $all_in_one_download_file; ?>">all-in-one php</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="nav pull-right" style="text-align: right;">
                                        <li>
                                            <a href="http://tjinteractive.org" target="_blank">tjinteractive.org</a>
                                        </li>
                                        <li class="divider-vertical"></li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">silly stuff<strong class="caret"></strong></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="http://wewihapahe.com" target="blank">the empire</a>
                                                </li>
                                                <li>
                                                    <a href="http://spaceshipapi.com" target="blank">the spaceship api</a>
                                                </li>
                                                <li>
                                                    <a href="http://snazifier.com" target="blank">the snazifier</a>
                                                </li>
                                                <li>
                                                    <a href="http://oneofthesethings.com" target="blank">one of these things</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END NAV BAR -->
		            <div class="row-fluid" style="margin: -10px auto -2px auto;">
        	            <div class="span12" style="text-align: center; ">
							<a class="" href="<?php print $all_in_one_download_file; ?>">all-in-one download</a>
					    </div>
				    </div>
                    <!-- END NAVIGATION -->
                    <?php endif; ?>
                    

                    
