<?php
 /**
 * @author Tamara Jean (TJ) Fredrikson http://www.tfredrikson.com
 * @copyright Copyright (C) 2013 TJ Fredrikson
 * @license http://creativecommons.org/licenses/by-sa/3.0/ Attribution-ShareAlike 3.0
 */ 

/**
 * This is the index file that loads the simple front end
 * 
 * It performs the following functions:
 *   1) reads in the parameters from the request
 *   2) loads the view with injected data
 * 
 */ 

$debug=0;

if($debug)
{
	print "\n<br />[BEGIN PHP print_r of _REQUEST params]<br />\n";
	print_r($_REQUEST);
	print "\n<br />[END PHP print_r of _REQUEST params]<br /><br />\n\n";
}

$path_to_common = '../'; 
 
require_once( $path_to_common.'_common/views/sub_views/header.php' );
require_once( 'views/front_end_view.php' );
require_once( $path_to_common.'_common/views/sub_views/footer.php' );