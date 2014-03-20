<?php
 /**
 * @author Tamara Jean (TJ) Fredrikson http://www.tfredrikson.com
 * @copyright Copyright (C) 2013 TJ Fredrikson
 * @license http://creativecommons.org/licenses/by-sa/3.0/ Attribution-ShareAlike 3.0
 */

/**
 * This is the configuration file for the app
 *
 */

$debug=0;

if($debug)
{
	print '[loading configuration file]<br />\n';
}


if(!isset($path_to_common)) $path_to_common = '';


// CONFIGURATION SETTINGS
$all_in_one_download_file = $path_to_common.'code_samples/tfredrikson_com_1_1_0.zip';
$pdf_resume_download_file = $path_to_common.'resume/tfredrikson_resume_1_1_0.pdf';


