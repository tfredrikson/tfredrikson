<?php
 /**
 * @author Tamara Jean (TJ) Fredrikson http://www.tfredrikson.com
 * @copyright Copyright (C) 2013 TJ Fredrikson
 * @license http://creativecommons.org/licenses/by-sa/3.0/ Attribution-ShareAlike 3.0
 */ 

/**
 * This is the simple front end view for the Ajax Print code test
 * 
 * It performs the following functions:
 *   1) presents the HTML5 and CSS that displays the view
 *   2) presents buttons that when clicked trigger an Ajax call
 *   3) has an area to display the data returned from the Ajax call
 * 
 */ 

$debug=0;

// initialize required variables
if(!isset($path_to_common)) $path_to_common = '';

?>                    

                    <!-- BEGIN HERO UNIT -->
                    <div class="hero-unit well">
                        <h1>ajax print</h1>
                        <h2>code test</h2>
                        <div>
                        	<ul class="breadcrumb" style="background: transparent; margin-bottom: 10px; margin-top: -5px;">
                        		<li><a href="#the_input">demo</a> <span class="divider">/</span></li>
                        		<li><a href="<?php print $path_to_common; ?>code_samples/_demos/ajax_print_1_0_0.zip">download</a> </li>
                        	</ul>
                        </div>
                        <div>
                            <a id="modal-120697" href="#modal-container-120697" role="button" class="btn btn-inverse btn-medium" data-toggle="modal">test requirements &raquo;</a>
                            <div id="modal-container-120697" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true" style="text-align: left;">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                    <h3 id="myModalLabel1">Ajax Print Code Test Requirements</h3>
                                </div>
                                <div class="modal-body">
                                    <ol>
                                        <li>There is a front-end page which will call your page via AJAX. Your page should expect a JSON input of some kind. (You don't need to write this part, unless you want to)</li>
                                        <li>This input should be cleaned and converted into a php array.</li>
                                        <li>Next, please iterate through that array and print out every element of the array (Similar to PHP's print_r feature, without actually using print_r).</li>
                                        <li>Every 8th value that's printed should be bolded.</li>
                                    </ol>
                                    <blockquote>
                                        <small>this is somewhat impractical since an AJAX page wouldn't be printing information, but it's been requested as a code sample for reviewing coding style</small>
                                    </blockquote>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">Close</button>
                                </div>
                            </div>
                            <a id="modal-120698" href="#modal-container-120698" role="button" class="btn btn-success btn-medium" data-toggle="modal">license &raquo;</a>
                            <div id="modal-container-120698" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true" style="text-align: left;">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                    <h3 id="myModalLabel2">license.txt</h3>
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
                    <div id="the_input" class="span11">
                        <h2>the input:</h2>
                        <div style="text-align: center">
                            <input id="ajax_trigger" class="btn btn-inverse btn-small" type="button" value="simple &raquo;">&nbsp;&nbsp;
                            <input id="ajax_trigger_multi" class="btn btn-success btn-small" type="button" value="multi-dimensional &raquo;">&nbsp;&nbsp;
                            <input id="ajax_clear" class="btn btn-small" type="button" value="clear &raquo;">
                        </div>
                        <div class="span12" style="">
                            <small style="color: #666; ">Enter your JSON here - it must be valid JSON on a single line - the "json=" parameter in the URL will also load here:</small>
                            <textarea id="json_textarea" class="span12" style="height: 100px;"><?php print $json_string; ?></textarea>
                            <div class="span12" style="text-align: right; ">
                                <input id="ajax_trigger_textarea" type="button" style="margin-right: 1.4em;" class="btn btn-success btn-medium" value="trigger ajax &raquo;">
                            </div>
                        </div>
                    </div>
                    <div class="span11">
                        <h2>the output:</h2>
                        <div class="tabbable" id="tabs-183435">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#panel-293945" data-toggle="tab">Line Breaks</a>
                                </li>
                                <li>
                                    <a href="#panel-575900" data-toggle="tab">No Line Breaks</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="panel-293945">
                                    <div id="ajax_wrap_with_lines">
                                        <div id="ajax_data_with_lines">
                                            <pre>ajax response will load here</pre>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="panel-575900">
                                    <div id="ajax_wrap">
                                        <div id="ajax_data">
                                            <pre>ajax response will load here</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="span11">
                        <hr />
                        <div class="span12">
                            <div class="span12">
                                <div style="text-align: center;">
                                    <a href="#at_top" class="btn">to top<span class="caret-up-black"></span></a>
                                </div>
                            </div>
                        </div>
                        <h2>the code:</h2>
                        <!--<h5 style="text-align: right;">download just the ajax_print source code:
                            <a href="code_samples/ajax_print_1_0.zip">ajax_print.zip</a>
                        </h5>-->
                        <h5 style="text-align: right;">download the all-in-one:
                            <a href="<?php print $all_in_one_download_file; ?>">tfredrikson_com_1_0_0.zip</a>
                        </h5>
                        <div class="tabbable tabs-left" id="tabs-183436">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a href="#panel-293946" data-toggle="tab">controllers</a>
                                </li>
                                <li>
                                    <a href="#panel-575906" data-toggle="tab">models</a>
                                </li>
                                <li>
                                    <a href="#panel-575907" data-toggle="tab">views</a>
                                </li>
                                <li>
                                    <a href="#panel-575908" data-toggle="tab">index.php</a>
                                </li>
                                <li>
                                    <a href="#panel-575909" data-toggle="tab">json_sample_data.js</a>
                                </li>
                                <li class="active">
                                    <a href="#panel-575910" data-toggle="tab">license.txt</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane" id="panel-293946">
                                    <pre><?php print htmlentities(file_get_contents( "code_samples/ajax_print/controllers/ajax_print_controller.php.txt",true)); ?>
                                    </pre>
                                </div>
                                <div class="tab-pane" id="panel-575906">
                                    <pre><?php print htmlentities(file_get_contents( "code_samples/ajax_print/models/ajax_print_model.php.txt",true)); ?>
                                    </pre>
                                </div>
                                <div class="tab-pane" id="panel-575907">
                                    <pre><?php print htmlentities(file_get_contents( "code_samples/ajax_print/views/front_end_view.php.txt",true)); ?>
                                    </pre>
                                </div>
                                <div class="tab-pane" id="panel-575908">
                                    <pre><?php print htmlentities(file_get_contents( "code_samples/ajax_print/index.php.txt",true)); ?>
                                    </pre>
                                </div>
                                <div class="tab-pane" id="panel-575909">
                                    <pre><?php print htmlentities(file_get_contents( "code_samples/ajax_print/json_sample_data.js.txt",true)); ?>
                                    </pre>
                                </div>
                                <div class="tab-pane active" id="panel-575910">
                                    <pre><?php print htmlentities(file_get_contents( "code_samples/ajax_print/license.txt",true)); ?>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT -->
                    
                    
                    
        <!-- JavaScript Last as an optimization -->
        <script type="text/javascript" src="json_sample_data.js"></script>
        <script type="text/javascript">
            var json_from_request = '<?php print $json_string; ?>';
            var url_without_json_string = "controllers/ajax_print_controller.php?json="; // initialized
            
            function perform_ajax_call( json_string_triggered )
            {
            	// console.log('json_string_triggered: '+json_string_triggered);
              	// clear previous html
                $( "#ajax_data_with_lines" ).html( '' );
                $( "#ajax_data" ).html( '' );

            	if(json_string_triggered.length == 0)
            	{
            		// no data to send
            	 	var alert_error_html = '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">x</button><h4>OOPS</h4> <strong>no data to send</strong> please add JSON data</div>' ;
            	    $( "#ajax_data_with_lines" ).html( alert_error_html );
            	    $( "#ajax_data" ).html( alert_error_html );
					return false;             	
            	}

            	// send the ajax request
                var xmlRequest = $.ajax({
                    url: url_without_json_string+encodeURIComponent(json_string_triggered),
                    beforeSend: function() {
					  var loading_graphic_html = '<div id="ajax_data_with_lines_loading"><img src="views/img/loading-bar.gif" alt="loading graphic" style="" /></div>';
    				  $('#ajax_data_with_lines').html(loading_graphic_html);
    				  $('#ajax_data').html(loading_graphic_html);
  					},
                });
                
                // update with the response
                xmlRequest.done(function( html ) {
	            	// console.log('html returned from ajax: ['+html+']');
                	if( html.length > 0 )
                	{
            	        $( "#ajax_data_with_lines" ).html( "<pre>"+html+"</pre>" );
            	        $( "#ajax_data" ).html( html );
            	    } else {
            	    	var alert_error_html = '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">x</button><h4>OOPS</h4> <strong>something went wrong</strong> check your JSON format</div>' ;
            	        $( "#ajax_data_with_lines" ).html( alert_error_html );
            	        $( "#ajax_data" ).html( alert_error_html );
            	    }
                });
                
            }
            
            // bind events to the buttons
            $(document).ready(function(){
            
              // sample data buttons
              $("#ajax_trigger_multi").click(function(){
              		// console.log('jsonDocument_multi: ['+jsonDocument_multi+']');
            		$( "#json_textarea" ).val( jsonDocument_multi );
                });
              $("#ajax_trigger").click(function(){
              		// console.log('jsonDocument_multi: ['+jsonDocument+']');
            		$( "#json_textarea" ).val( jsonDocument );
                });  // end sample data buttons
                

              // clear ajax button
              $("#ajax_clear").click(function(){
              	// console.log('json_textarea: ['+$( "#json_textarea" ).html( '' )+']');
            	$( "#json_textarea" ).val( '' );
            	$( "#ajax_data_with_lines" ).html( "<pre>ajax response will load here</pre>" );
            	$( "#ajax_data" ).html( "<pre>ajax response will load here</pre>" );
              });  // end clear ajax button


              // trigger ajax button
              $("#ajax_trigger_textarea").click(function(){
            		perform_ajax_call( $("#json_textarea").val() );
            		// move to the input/output area
            		document.location.hash = "";
            		document.location.hash = "#the_input";
              });  // end trigger ajax button
              
            }); // end ready function
        </script>
        <!-- JavaScript Last as an optimization -->                    
