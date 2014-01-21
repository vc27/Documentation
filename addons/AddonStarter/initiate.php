<?php
/**
 * File Name initiate.php
 * @package ProjectName
 * @license GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version 1.0
 * @updated 00.00.00
 **/
#################################################################################################### */


if ( ! defined('AddonStarter_INIT') ) {
	
	class AddonStarterSettings {		
		
		
		/**
		 * variable
		 * 
		 * @access public
		 * @var string
		 **/
		var $variable = '';
		
		
	}; // end class AddonStarterSettings
	
	
	
	// Classes
	require_once( "ClassName.php" );
	
	define( 'AddonStarter_INIT', true );
	
	
	
} // end if ( ! defined('AddonStarter_INIT') )