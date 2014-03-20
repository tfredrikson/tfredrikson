<?php
 /**
 * @author Tamara Jean (TJ) Fredrikson http://www.tfredrikson.com
 * @copyright Copyright (C) 2013 TJ Fredrikson
 * @license http://creativecommons.org/licenses/by-sa/3.0/ Attribution-ShareAlike 3.0
 */ 

/**
 * This is the simple model for the Ajax Print code test
 * 
 * It has one method:
 *   @param the array to print
 *   @param the depth (used for resursion on multi-dimensional arrays)
 *   @return the text string formatted like print_r with 
 		every AJAX_PRINT_NUM_ITEM_TO_BOLD item bold
 */ 

$debug=0;

if(!defined(AJAX_PRINT_NUM_ITEM_TO_BOLD)) define('AJAX_PRINT_NUM_ITEM_TO_BOLD', 8);

class Ajax_Print_Model {

	public $debug=0;
	
	function __construct()
	{
		// do nothing	
	}
	
	public function ajax_print_for_test( $array_to_print, $depth = 0 )
	{
		$ajax_debug=0;
		$text_to_return = ''; //initialized

		if($ajax_debug)
		{
			$text_to_return .= "[BEGIN print_r_for_test at depth $depth]";
		}

		if(is_array( $array_to_print ))
		{
			$text_to_return .= "Array\n";
			for($i = 0; $i < $depth; $i++ ) $text_to_return .= "\t";
			$text_to_return .= "(\n";
			$counter = 0;
			foreach( $array_to_print as $key => $value )
			{
				for($i = 0; $i < $depth; $i++ ) $text_to_return .= "\t";
			
				$counter++;
				if( $depth == 0 && $counter % AJAX_PRINT_NUM_ITEM_TO_BOLD == 0 )
				{
					$text_to_return .= '<strong class="ajax_print_bold">';
				}
				$text_to_return .= "    [".$key."] => ";			
				if(is_array( $value ))
				{
					$text_to_return .= $this->ajax_print_for_test( $value, $depth+1 );
				}
				else
				{
					$text_to_return .= $value."\n";			
				}
				if( $depth == 0 && $counter % AJAX_PRINT_NUM_ITEM_TO_BOLD == 0 )
				{
					$text_to_return .= "</strong>";
				}
			}
			for($i = 0; $i < $depth; $i++ ) $text_to_return .= "\t";
			$text_to_return .= ")\n";
		}
		
		if($ajax_debug)
		{
			for($i = 0; $i < $depth; $i++ ) $text_to_return .= "\t";
			$text_to_return .= "[END PHP print_r_for_test at depth $depth]\n\n";
		}
		
		return $text_to_return;
	}	

} // end class Ajax_Print_Model