<?php
 /**
 * @author Tamara Jean (TJ) Fredrikson http://www.tfredrikson.com
 * @copyright Copyright (C) 2013 TJ Fredrikson
 * @license http://creativecommons.org/licenses/by-sa/3.0/ Attribution-ShareAlike 3.0
 */ 

/**
 * This is the simple controller for the Ajax Print code test
 * 
 * It performs the following functions:
 *   1) reads the $_REQUEST parameter to get the JSON data
 *   2) loads the model with the array to print
 * 
 */ 

$debug=0;
$ajax_debug=0;
$print_r_debug=0;

if($ajax_debug)
{
	print "\n[BEGIN PHP print_r of _REQUEST params]\n";
	print_r($_REQUEST);
	print "[END PHP print_r of _REQUEST params]\n\n";
}

if( !empty($_REQUEST) && isset( $_REQUEST['json'] ) )
{
	$php_array = Array();
	$php_array = json_decode($_REQUEST['json'], true);
}
if( !empty($php_array) )
{
	if($ajax_debug)
	{
		print "\n[BEGIN var_dump( php_array ) after json_decode]\n";
		var_dump( $php_array );
		print "\n[END var_dump( php_array ) after json_decode]\n\n";
	}

	if($print_r_debug)
	{
		print "\n[BEGIN PHP print_r]\n";
		print_r($php_array);
		print "\n[END PHP print_r]\n\n";
	}

	require_once('../models/ajax_print_model.php');
	$ajax_print_r = new Ajax_Print_Model;
	print $ajax_print_r->ajax_print_for_test($php_array);
}	

exit;