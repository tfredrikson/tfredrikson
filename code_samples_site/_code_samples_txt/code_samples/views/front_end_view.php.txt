<?php
 /**
 * @author Tamara Jean (TJ) Fredrikson http://www.tfredrikson.com
 * @copyright Copyright (C) 2013 TJ Fredrikson
 * @license http://creativecommons.org/licenses/by-sa/3.0/ Attribution-ShareAlike 3.0
 */ 

/**
 * This is the simple front end view for the code_samples area
 * 
 * It presents the HTML5 and CSS for the code_samples area
 */ 

$debug=0;

// initialize required variables
if(!isset($path_to_common)) $path_to_common = '';

?>

                    <!-- BEGIN HERO UNIT -->
                    <div class="hero-unit well">
                        <h1>code samples</h1>
                        <h2>tj fredrikson</h2>
                        <div>
                        	<ul class="breadcrumb" style="background: transparent; margin-bottom: 10px; margin-top: -5px;">
                        		<li><a href="<?php print $all_in_one_download_file; ?>">download the all-in-one</a> <span class="divider">/</span> </li>
                        		<li><a href="<?php print $path_to_common; ?>resume">tj's resume</a> </li>
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



                    <!-- BEGIN CONTENT -->
                    <ul class="thumbnails">
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3>ajax print</h3>
                                    <p>this simple coding test uses ajax to read in a json string 
                                    and perform recursive actions on that string producing an output
                                    that simulates the output of the standard print_r() function</p>
                                    <p>
                                        <a class="btn btn-inverse" href="_demos/ajax_print/">demo &raquo;</a>
                                        <a class="btn btn-success" href="<?php print $path_to_common; ?>code_samples/_demos/ajax_print_1_0_0.zip">download &raquo;</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="span4" style="">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3>javascript web service</h3>
                                    <p>this server-side javascript web service uses the REST-API method to handle a request to 
                                    convert the incoming text string and add meta data about the changes <strong>(coming soon)</strong></p>
                                    <p>
                                        <a class="btn btn-inverse disabled" href="#">demo &raquo;</a>
                                        <a class="btn btn-success disabled" href="#">download &raquo;</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="span4" style="">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3>stanford epgy</h3>
                                    <p>this test was offered by the stanford educational program for gifted youth (epgy) 
                                    and allows the user to add students and teachers to a database
                                        <strong>(coming soon)</strong>
                                    </p>
                                    <p>
                                        <a class="btn btn-inverse disabled" href="#">demo &raquo;</a>
                                        <a class="btn btn-success disabled" href="#">download &raquo;</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="span11">
                        <ul class="thumbnails">
                            <li class="span6" style="background-color: #eee">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <h3>project euler #1</h3>
                                        <p>add all the natural numbers below one thousand that are multiples of 3 or 5
                                            <strong>(coming soon)</strong>
                                        </p>
                                        <p>
                                        <a class="btn btn-inverse disabled" href="#">demo &raquo;</a>
                                        <a class="btn btn-success disabled" href="#">download &raquo;</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="span6" style="background-color: #eee">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <h3>project euler #2</h3>
                                        <p>by considering the terms in the fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms
                                            <strong>(coming soon)</strong>
                                        </p>
                                        <p>
                                        <a class="btn btn-inverse disabled" href="#">demo &raquo;</a>
                                        <a class="btn btn-success disabled" href="#">download &raquo;</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- END CONTENT -->
                    
                    