<?php
/**
 * @package Helix Framework
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2014 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/
//no direct accees
defined ('_JEXEC') or die('resticted aceess');

//[alert]
if(!function_exists('blockquote_sc')){
	function blockquote_sc($atts, $content=''){
		 extract(shortcode_atts(array(
		
        "close" => true
     ), $atts));
     return '<div class="blockquote_shortcode fade in"><div><i class="fa fa-quote-left"></i> ' . $content . ' <i class="fa fa-quote-right"></i></div></div>';
	}
	add_shortcode('blockquote','blockquote_sc');
}

