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

?>
                    <!-- BEGIN HERO UNIT -->
                    <div class="hero-unit well">
                    	<h1>tamara jean</h1>
                        <h2>tj fredrikson</h2>
                        <div>
                        	<ul class="breadcrumb" style="background: transparent; margin-bottom: 10px; margin-top: -5px;">
                        		<li><a href="<?php print $path_to_common; ?>code_samples/">code samples</a> <span class="divider">/</span></li>
                        		<li><a href="<?php print $path_to_common; ?>resume/">resume</a> </li>
                        	</ul>
                        </div>
                        <div>
                            <a id="tj_linkedin_btn" target="_blank" href="http://linkedin.com/in/tfredrikson" role="button" class="btn btn-inverse btn-medium">linkedin &raquo;</a>
                            <a id="tj_aboutme_btn" target="_blank" href="http://about.me/tamarajean" role="button" class="btn btn-success btn-medium">about.me &raquo;</a>
                        </div>
                    </div>
                    <!-- END HERO UNIT -->
                    

                    <!-- BEGIN CONTENT -->
                    <ul class="thumbnails">
                        <li class="span4" style="">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3>code samples</h3>
                                    <p>
                                    	php, json, ajax, jquery, mvc, bootstrap.js, less.css, html5, javascript and more... 
                                    </p>
                                    <p>
                                        <a class="btn btn-inverse" href="<?php print $path_to_common; ?>code_samples/">demos &raquo;</a>
                                        <a class="btn btn-success" href="<?php print $all_in_one_download_file; ?>">download &raquo;</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3>tj's resume</h3>
                                    <p>
                                    	computer scientist with great grades, awesome test scores, and 10+ years experience
                                    </p>
                                    <p>
                                        <a class="btn btn-inverse" href="<?php print $path_to_common; ?>resume">html5 &raquo;</a>
                                        <a class="btn btn-success" href="<?php print $pdf_resume_download_file; ?>" target="_blank">pdf &raquo;</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="span4" style="">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3>tjinteractive.org</h3>
                                    <p>
                                    	beefy macs (750gb 7200 rpm standard), web and mobile development services, and silly stuff
                                    </p>
                                    <p>
                                        <a class="btn btn-inverse" href="http://tjinteractive.org/web/" target="_blank">website &raquo;</a>
                                        <a class="btn btn-success" href="http://tjinteractive.org/web/contact-us" target="_blank">contact &raquo;</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    
                    <!-- BEGIN THE CODE -->
                    <div class="span11">
                        <h2>the code:</h2>
                        <h5 style="text-align: right;">download the complete source code:
                            <a href="<?php print $all_in_one_download_file; ?>">tfredrikson_com_1_0_0.zip</a>
                        </h5>
                        <div class="tabbable tabs-left" id="tabs-183436">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a href="#panel-293946" data-toggle="tab">_common</a>
                                </li>
                                <li>
                                    <a href="#panel-575906" data-toggle="tab">code_samples</a>
                                </li>
                                <li>
                                    <a href="#panel-575907" data-toggle="tab">resume</a>
                                </li>
                                <li>
                                    <a href="#panel-575908" data-toggle="tab">views</a>
                                </li>
                                <li>
                                    <a href="#panel-575909" data-toggle="tab">index.php</a>
                                </li>
                                <li class="active">
                                    <a href="#panel-575910" data-toggle="tab">license.txt</a>
                                </li>
                                <li>
                                    <a href="#panel-575911" data-toggle="tab">readme.html</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane" id="panel-293946">
                                	<h4>_common / views / sub_views / header.php</h4>
                                    <pre><?php print htmlentities(file_get_contents( "_code_samples_txt/_common/views/sub_views/header.php.txt",true)); ?>
                                    </pre>
			                        <div style="text-align: center; margin-top: 10px; ">
    			                        <a href="#at_top" class="btn">to top<span class="caret-up-black"></span></a>
        	    		            </div>
                                	<h4>_common / views / sub_views / footer.php</h4>
                                    <pre><?php print htmlentities(file_get_contents( "_code_samples_txt/_common/views/sub_views/footer.php.txt",true)); ?>
                                    </pre>
                                </div>
                                <div class="tab-pane" id="panel-575906">
                                	<h4>code_samples / _demos/</h4>
                                	<pre>to view the individual demos and source code, see the <a href="<?php print $path_to_common; ?>code_samples/">code samples</a> area</pre> 

                                	<h4>code_samples / index.php</h4>
                                    <pre><?php print htmlentities(file_get_contents( "_code_samples_txt/code_samples/index.php.txt",true)); ?>
                                    </pre>
			                        <div style="text-align: center; margin-top: 10px; ">
    			                        <a href="#at_top" class="btn">to top<span class="caret-up-black"></span></a>
        	    		            </div>
        	    		            
                                	<h4>code_samples / views / front_end_view.php</h4>
                                    <pre><?php print htmlentities(file_get_contents( "_code_samples_txt/code_samples/views/front_end_view.php.txt",true)); ?>
                                    </pre>
                                </div>
                                <div class="tab-pane" id="panel-575907">
                                	<h4>resume / index.php</h4>
                                    <pre><?php print htmlentities(file_get_contents( "_code_samples_txt/resume/index.php.txt",true)); ?>
                                    </pre>
			                        <div style="text-align: center; margin-top: 10px; ">
    			                        <a href="#at_top" class="btn">to top<span class="caret-up-black"></span></a>
        	    		            </div>
                                	<h4>resume / views / front_end_view.php</h4>
                                    <pre><?php print htmlentities(file_get_contents( "_code_samples_txt/resume/views/front_end_view.php.txt",true)); ?>
                                    </pre>
                                </div>
                                <div class="tab-pane" id="panel-575908">
                                	<h4>views / front_end_view.php</h4>
                                    <pre><?php print htmlentities(file_get_contents( "_code_samples_txt/views/front_end_view.php.txt",true)); ?>
                                    </pre>
                                </div>
                                <div class="tab-pane" id="panel-575909">
                                	<h4>index.php</h4>
                                    <pre><?php print htmlentities(file_get_contents( "_code_samples_txt/index.php.txt",true)); ?>
                                    </pre>
                                </div>
                                <div class="tab-pane active" id="panel-575910">
                                	<h4>license.txt</h4>
                                    <pre><?php print htmlentities(file_get_contents( "_code_samples_txt/license.txt",true)); ?>
                                    </pre>
                                </div>
                                <div class="tab-pane" id="panel-575911">
                                	<h4>readme.html</h4>
                                    <pre><?php print htmlentities(file_get_contents( "_code_samples_txt/readme.html.txt",true)); ?>
                                    </pre>
                                </div>
                            </div>                    
                        </div>                    
                    </div>                    
                    <!-- END THE CODE-->
                    <!-- END CONTENT -->
                    
                    